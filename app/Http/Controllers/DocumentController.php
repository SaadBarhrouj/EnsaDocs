<?php

namespace App\Http\Controllers;

use App\Models\demande;
use App\Models\etudiantModel;
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
            'annee_universitaire' => 'nullable|string',
            'entreprise' => 'nullable|string',
            'releve-select' => 'nullable|in:2ap1, 2ap2, ci1, ci2, ci3',
             'filiere' => 'nullable|in:gi, gstr, gc, gm, scm, bd, ',
        ]);



        $documentMap = [
            'lettre' => 'Lettre de recommandation',
            'convention' => 'Convention de stage',
            'releve' => 'Relevé de note',
            'attestation' => 'Attestation de scolarité',
        ];
        
        $filiereMap = [
            'gi' => 'GI',
            'gstr' => 'GSTR',
            'gc' => 'GC',
            'gm' => 'GM',
            'scm' => 'SCM',
            'bd' => 'BD',
        ];
        $cycleMap = [
            '2ap1' => '2AP1',
            '2ap2' => '2AP2',
            'ci1' => 'CI1',
            'ci2' => 'CI2',
            'ci3' => 'CI3',
        ];
        $demande = new Demande();
        $demande->nom = $request->nom;
        $demande->apogee = $request->apogee;
        $demande->cin = $request->cin;
        $demande->email = $request->email;
        $demande->type_demande = $documentMap[$request->document]; // Save the selected document type
        $demande->id_etudiant = 1; 
        $demande->date_demande = now(); 
        $demande->entreprise = $request->entreprise;
        $demande->annee_universitaire = $request->annee_universitaire;
        $demande->filiere = $filiereMap[$request->filiere];
        $demande->cycle = $cycleMap[$request->cycle];
        $demande->save();

        return back()->with('success', 'Demande envoyée avec succès!');
    }
}