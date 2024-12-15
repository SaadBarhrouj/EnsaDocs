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

        // Create a new demande
        $demande = new Demande();
        $demande->nom = $request->nom;
        $demande->apogee = $request->apogee;
        $demande->cin = $request->cin;
        $demande->email = $request->email;
        $demande->type_demande = $documentMap[$request->document]; // Save the selected document type
        $demande->id_etudiant = 1; 
        $demande->date_demande = now(); 
        $demande->save();
    
        return redirect()->route('demande.index')->with('success', 'Demande envoyée avec succès!');
    }
}    