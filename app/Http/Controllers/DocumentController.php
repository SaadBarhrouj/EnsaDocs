<?php




namespace App\Http\Controllers;

use App\Models\demande;
use Illuminate\Http\Request;

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
        ]);

     $documentMap = [
        'lettre' => 'Lettre de recommandation',
        'convention' => 'Convention de stage',
        'releve' => 'Relevé de note',
        'attestation' => 'Attestation de scolarité',
    ];

        $demande = new Demande();
        $demande->nom = $request->nom;
        $demande->apogee = $request->apogee;
        $demande->cin = $request->cin;
        $demande->email = $request->email;
        $demande->type_demande = $documentMap[$request->document]; // Save the selected document type
        $demande->id_etudiant = 1; 
        $demande->date_demande = now(); 
        $demande->save();
        return back()->with('success', 'Demande envoyée avec succès!');

        
    }

    public fuction storeReleve(Request $request) {
        $request->validate([
            'releve-select' =>'required|in:2ap1, 2ap2, ci1, ci2, ci1, ci2, ci3',
            'filiere' => 'required | in:gi, gstr, gc, gm, scm, bd',
        ]);

        $demande = new Demande();
        $demande->id_etudiant = 1;
        $demande->filiere = $request->filiere;
        $demande->nom = $request->nom;
        $demande->cycle = $request->input('releve-select');
        $demande->annee_universitaire= now()->year;
        $demande->save();

        return redirect()->back()->with('success', 'Demande envoyée avec succès!');

    }
}    