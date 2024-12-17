<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\reclamations; 
use App\Models\historique_reclamations; 
class AdminController extends Controller
{

    public function index(){
      
        return view('dashboard');
    
    }

    public function handleDashboard(Request $request)
    {
        if ($request->isMethod('post')) {

            $data = $request->all();

            return redirect()->route('dashboard')->with('status', 'Formulaire soumis avec succès!');
        }

        return view('dashboard');
    }
    
    


public function view_demande_en_cours(){

  

    return view('demandes_en_cours');

}

public function view_reclamation_en_cours(){
       


    $data=reclamations::all();

    return view('reclamations_en_cours',compact('data'));

}
public function view_historique_reclamation(){
    $data=historique_reclamations::all();
    
    return view('historiques_reclamations', compact('data'));

}

public function view_historique_demande(){
    return view('historiques_demandes');

}

public function show_detail_reclamation ($recla_id) {
    $singlereclamationFromDB=reclamations::findOrFail($recla_id);
return view ('reclamations_en_cours_details',['reclamation' => $singlereclamationFromDB]);
}

public function show_detail_reclamation_historiques ($recla_id) {
    $singlereclamationFromDB=historique_reclamations::findOrFail($recla_id);
return view ('reclamations_historiques_details',['historique_reclamations' => $singlereclamationFromDB]);
}
}
