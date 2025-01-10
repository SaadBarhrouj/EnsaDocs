<?php

namespace App\Http\Controllers;

use App\Mail\RespondToStudent;
use App\Models\Demande;
use App\Models\Etudiant;
use Illuminate\Http\Request;
use App\Models\reclamations; 
use App\Models\historique_reclamations;
use App\Models\HistoriqueDemandes;
use Exception;
use Illuminate\Support\Facades\Mail;

class AdminController extends Controller
{

    public function index(){
      
        $numberOfEtudiants = Etudiant::count();
        $numberOfDemandes  = Demande::count();

        // Pass the counts to the view
        return view('dashboard', compact('numberOfEtudiants', 'numberOfDemandes'));
    
    }

    public function handleDashboard(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            return redirect()->route('dashboard')->with('status', 'Formulaire soumis avec succès!');
        }

        $numberOfEtudiants = Etudiant::count();
        $numberOfDemandes  = Demande::count();
        $numberOfDemandesTraites  = HistoriqueDemandes::count();
        $numberOfReclamations  = Reclamations::count();
        $numberOfDemandesAcc = HistoriqueDemandes::where('decision', 'validated')->count();
        $numberOfDemandesRef = HistoriqueDemandes::where('decision', 'rejected')->count();
        
        // Pass the counts to the view
        return view('dashboard', compact('numberOfEtudiants', 'numberOfDemandes', 'numberOfDemandesTraites', 'numberOfReclamations', 'numberOfDemandesAcc', 'numberOfDemandesRef'));
    }

public function view_demande_en_cours(){
    $demandes = Demande::all();
    return view('demandes_en_cours', ['demandes' => $demandes, 'current' => ""]);
}

public function view_reclamation_en_cours(){
    $data= reclamations::with('demande')->get();
    return view('reclamations_en_cours', ['data' => $data, "current" => ""]);

}
public function view_historique_reclamation(){
    $data= historique_reclamations::all();
    return view('historiques_reclamations', ["data" => $data, "current" => ""]);
}

public function show_reclamation() {

}

public function view_historique_demande() {
    $demandes = HistoriqueDemandes::all();
    return view('historiques_demandes', ['demandes' => $demandes, 'current' => ""]);

}

public function show_detail_reclamation($recla_id) {
    $singlereclamationFromDB=reclamations::findOrFail($recla_id);
    return view ('reclamations_en_cours_details',['reclamation' => $singlereclamationFromDB]);
}

public function reclamations_repondre(Request $request, $recla_id) {
    $request->validate([
        'response' => 'required|max:255'
    ]);
    try {
    $reclamation= reclamations::findOrFail($recla_id)->with('demande')->first();
    Mail::to($reclamation->email)->send(new RespondToStudent($reclamation->nom, $request->response, $reclamation->demande->type_demande, $reclamation->reclamation));
    historique_reclamations::create([
        'id_demande' => $reclamation->demande->id,
        'nom' => $reclamation->nom,
        'email' => $reclamation->email,
        'apogee' => $reclamation->code_apogee,
        'type_document' => $reclamation->demande->type_demande,
        'date_reclamation' => $reclamation->date_envoi,
        'reclamation' => $reclamation->reclamation,
        'reponse' => $request->response,
        'date_reponse' => now()
    ]);
    $reclamation->delete();
    return redirect()->back()->with('success', 'Email envoyé!');
}
    catch (Exception $e) {
        return back()->with('error', "Une erreur est survenue " .  $e->getMessage());
    }
}

    public function show_detail_reclamation_historiques($recla_id) {
        $singlereclamationFromDB= historique_reclamations::findOrFail($recla_id);
        return view ('reclamations_historiques_details',['reclamation' => $singlereclamationFromDB]);
    }
}
