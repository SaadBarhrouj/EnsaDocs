<?php

namespace App\Http\Controllers;

use App\Models\Demande;
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
}
