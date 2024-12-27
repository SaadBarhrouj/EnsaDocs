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
    public function store(Request $request)
    {
        // Validate the incoming data
        $request->validate([
            'nom' => 'required|string',
            'apogee' => 'required|string',
            'cin' => 'required|string',
            'email' => 'required|email',
            'document' => 'required|in:lettre,convention,releve,attestation',
            'entreprise' => 'nullable|string', // For convention stage
            'periode' => 'nullable|int',    // For convention stage
            'releve_select' => 'nullable|in:2ap1,2ap2,ci1,ci2,ci3', // Relevé options
            'filiere' => 'nullable|in:gi,gstr,gc,gm,scm,bd', // For both releve and convention
        ]);

        // Initialize the document type mapping
        $documentMap = [
            'lettre' => 'Lettre de recommandation',
            'convention' => 'Convention de stage',
            'releve' => 'Relevé de notes',
            'attestation' => 'Attestation de scolarité',
        ];

        // Create the Demande record
       
        $demande = new Demande();
        $demande->nom = $request->nom;
        $demande->apogee = $request->apogee;
        $demande->cin = $request->cin; 
        $demande->id_etudiant = 1;
        $demande->email = $request->email;
        $demande->type_demande = $documentMap[$request->document]; // Save the selected document type
        $demande->date_demande = now();
        
        // Additional fields depending on the document type
        if ($request->document == 'convention') {
            $demande->entreprise = $request->entreprise; // Company name for convention stage
            $demande->periode = $request->periode;       // Duration of internship
        }
        if ($request->document == 'releve') {
            if ($request->releve_select) {
                $demande->cycle = $request->releve_select;
            }
            if ($request->filiere) {
                $demande->filiere = $request->filiere;
            }
        }

        // Save the Demande record
        $demande->save();

        // Return a success message
        return back()->with('success', 'Demande envoyée avec succès!');
    }

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
