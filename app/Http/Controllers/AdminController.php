<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\reclamations; 

class AdminController extends Controller
{

    public function index(){
        $reclamations=reclamations::all();
        return view('dashboard',compact('reclamations'));
    
    }
    
    public function view_reclamation_en_cours(){
       


        $data=reclamations::all();

        return view('reclamations_en_cours',compact('data'));

}

public function view_demande_en_cours(){

  

    return view('demandes_en_cours');

}

public function view_historique_reclamation(){

    
    return view('historiques_reclamations');

}

public function view_historique_demande(){
    return view('historiques_demandes');

}

}
