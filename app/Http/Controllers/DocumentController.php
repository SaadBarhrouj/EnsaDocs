<?php

namespace App\Http\Controllers;

use App\Mail\SendMailRefuse;
use App\Mail\SendMailValide;
use App\Models\Demande;
use App\Models\HistoriqueDemandes;
use App\Models\Etudiant;
use App\Models\gi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use Exception;
use Illuminate\Support\Str;

class DocumentController extends Controller
{
    public function store(Request $request)
    {
        $documentMap = [
            'lettre' => 'Lettre de recommandation',
            'convention' => 'Convention de stage',
            'releve' => 'Relevé de notes',
            'attestation' => 'Attestation de scolarité',
        ];
        try {
        $request->validate([
            'nom' => 'required|string',
            'apogee' => 'required|string',
            'cin' => 'required|string',
            'email' => 'required|email',
            'document' => 'required|in:lettre,convention,releve,attestation',
            'entreprise' => 'nullable|string',
            'periode' => 'nullable|int',
            'releve_select' => 'nullable|in:2ap1,2ap2,ci1,ci2,ci3',
            'filiere' => 'nullable|in:gi,gstr,gc,gm,scm,bd',
        ]);

        $etudiant = Etudiant::where('apogee', $request->apogee)
        ->where('nom', $request->nom)
        ->where('email', $request->email)
        ->where('cin', $request->cin)
        ->first();

        if (!$etudiant)
            return back()->with('error', "Vos données ne sont pas correctes!");
        $demandeCheck = Demande::where('nom', $request->nom)
        ->where('type_demande', $documentMap[$request->document])
        ->where('status', 'opened')->count();
        if ($demandeCheck > 0)
            return back()->with('error', "Veuillez attendre que l'administrateur réponde!");
        
        $demande = new Demande();
        $demande->nom = $request->nom;
        $demande->apogee = $request->apogee;
        $demande->cin = $request->cin;
        $demande->etudiant_id = $etudiant->id;
        $demande->email = $request->email;
        $demande->type_demande = $documentMap[$request->document];
        $demande->date_demande = now();
        $demande->status = 'opened';

        if ($request->document == 'convention') {
            $demande->entreprise = $request->entreprise;
            $demande->periode = $request->periode;
        }
        if ($request->document == 'releve') {
            if ($request->releve_select) {
                $demande->cycle = $request->releve_select;
            }
            if ($request->filiere) {
                $demande->filiere = $request->filiere;
            }
        }
        $demande->save();
        return back()->with('success', 'Demande envoyée avec succès!');
    }
        catch (Exception $e) {
            return back()->with('error', "Une erreur est survenue");
        }
    }

    public function valider(int $id)
    {
        $demande = Demande::findOrFail($id);
        $demande->save();
        $slug = Str::slug($demande->type_demande);
        $pdfPath = public_path("pdfs/{$demande->apogee}_{$slug}_demandeID-{$id}.pdf");

        if (!file_exists($pdfPath)) {
            return back()->with('error', "PDF introuvable. Veuillez cliquer sur Apercu.");
        }

        // Send the email with the PDF attached
        Mail::to($demande->email)->send(new SendMailValide($pdfPath, $demande->nom, $demande->type_demande));

        HistoriqueDemandes::create([
            'nom' => $demande->nom,
            'apogee' => $demande->apogee,
            'email' => $demande->email,
            'type_demande' => $demande->type_demande,
            'decision' => 'validated',
            'date_demande' => $demande->date_demande,
            'date_reponse' => Carbon::now(),
            'etudiant_id' => $demande->etudiant_id,
        ]);
        $demande->delete();

        return back()->with('success', 'Demande validée avec succès!');
    }

    public function refuser(int $id)
    {
        $demande = Demande::findOrFail($id);
        $demande->save();
        Mail::to($demande->email)->send(new SendMailRefuse($demande->nom, $demande->type_demande));

        HistoriqueDemandes::create([
            'nom' => $demande->nom,
            'apogee' => $demande->apogee,
            'email' => $demande->email,
            'type_demande' => $demande->type_demande,
            'decision' => 'rejected',
            'date_demande' => $demande->date_demande,
            'date_reponse' => Carbon::now(),
            'etudiant_id' => $demande->etudiant_id,
        ]);

        $demande->delete();

        return back()->with('success', 'Demande refusée avec succès!');
    }

    public function preview($id)
    {
        $demande = Demande::findOrFail($id);
        $type_demande = $demande->type_demande;
    
        // Retrieve the associated etudiant (student)
        $etudiant = $demande->etudiant;
    
        // Choose the appropriate PDF view based on type_demande
        $viewMap = [
            'Attestation de scolarité' => 'pdf.Attestation_scolarite',
            'Convention de stage' => 'pdf.Convention_stage',
            'Relevé de notes' => 'pdf.releve_note',
            'Lettre de recommandation' => 'pdf.Lettre_recommendation',
        ];
    
        $view = $viewMap[$type_demande];

        $notes   = null;
        $moyenne = null;

        if ($type_demande === 'Relevé de notes') {
            if ($etudiant->filiere == 'GI') {
                if ($demande->cycle == 'CI2') {
                    $notes = Gi::where('etudiant_id', $etudiant->id)->first();
            
                    if ($notes) {
                        // Calculate the moyenne using the 6 grades
                        $moyenne = (
                            $notes->prog_avancee +
                            $notes->electro_numerique +
                            $notes->theorie_graphes +
                            $notes->theorie_langages +
                            $notes->genie_logiciel +
                            $notes->management
                        ) / 6;
                    }
                }
            }
            
        }
        
        $pdf = PDF::loadView($view, [
            'demande'  => $demande,
            'etudiant' => $etudiant,
            'notes'    => $notes,
            'moyenne'  => $moyenne,
        ]);
    
        // Define the PDF save path
        $slug = Str::slug($demande->type_demande);
        $pdfPath = public_path("pdfs/{$demande->apogee}_{$slug}_demandeID-{$id}.pdf");
        $pdf->save($pdfPath);
    
        // Return the PDF inline to the browser
        return $pdf->stream('demande_preview.pdf');
    }
}
