<?php
namespace App\Http\Controllers;
use App\Mail\SendMailRefuse;
use App\Mail\SendMailValide;
use App\Models\demande;
use App\Models\historique_demandes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Barryvdh\DomPDF\Facade\Pdf;
use Laravel\Pail\ValueObjects\Origin\Console;
use Carbon\Carbon;
use Illuminate\Support\Str;

class DocumentController extends Controller
{
    
    public function index()
    {
        $demandes = demande::all();
        return view('demandes.index', ['demandes' => $demandes]);
    }

    public function preview($id)
    {
        // Find the demande record
        $demande = demande::findOrFail($id);
        $type_demande = $demande->type_demande;
    
        // Retrieve the associated student
        $etudiant = $demande->etudiant;
    
        // Choose the appropriate PDF view based on type_demande
        $viewMap = [
            'Attestation de scolarité' => 'pdf.Attestation_scolarite',
            'Convention de stage' => 'pdf.Convention_stage',
            'Relevé de notes' => 'pdf.releve_note',
            'Lettre de recommandation' => 'pdf.Lettre_recommendation',
        ];
    
        $view = $viewMap[$type_demande];
    
        // Generate the PDF with demande and etudiant data
        $pdf = PDF::loadView($view, [
            'demande' => $demande,
            'etudiant' => $etudiant,
        ]);
    
        // Define the PDF save path
        $slug = Str::slug($demande->type_demande);
        $pdfPath = public_path("pdfs/{$demande->apogee}_{$slug}_demandeID-{$id}.pdf");
        $pdf->save($pdfPath);
    
        // Return the PDF inline to the browser
        return $pdf->stream('demande_preview.pdf');
    }


    public function valider(int $id)
    {
        $demande = demande::findOrFail($id);

        $slug = Str::slug($demande->type_demande);
        $pdfPath = public_path("pdfs/{$demande->apogee}_{$slug}_demandeID-{$id}.pdf");

        // Send the email with the PDF attached
        Mail::to($demande->email)->send(new SendMailValide($pdfPath));

        historique_demandes::create([
            'nom' => $demande->nom,
            'apogee' => $demande->apogee,
            'email' => $demande->email,
            'type_demande' => $demande->type_demande,
            'etat_demande' => 'Validée',
            'date_demande' => $demande->date_demande,
            'date_reponse' => Carbon::now(),
            'id_etudiant' => $demande->id_etudiant, 
        ]);

        $demande->delete();

        return back()->with('success', 'Demande validée avec succès!');
    }

    public function refuser(int $id) {
        $demande = demande::findOrFail($id);
        Mail::to($demande->email)->send(new SendMailRefuse());

        historique_demandes::create([
            'nom' => $demande->nom,
            'apogee' => $demande->apogee,
            'email' => $demande->email,
            'type_demande' => $demande->type_demande,
            'etat_demande' => 'Refusée',
            'date_demande' => $demande->date_demande,
            'date_reponse' => Carbon::now(),
            'id_etudiant' => $demande->id_etudiant, 
        ]);

        $demande->delete();

        return back()->with('success', 'demande refusé avec succès!');
    }
}
