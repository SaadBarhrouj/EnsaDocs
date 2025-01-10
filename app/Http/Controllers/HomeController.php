<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use Illuminate\Http\Request;

class HomeController extends Controller
{
  
      public function home(){
         return view('home.index');
      }

      public function demande(){
            return view('home.demande');
         }

         public function reclamation() {
            $demandes = [];
            $etudiant = new Etudiant();
            $etudiant->nom = "";
            $etudiant->apogee = "";
            $etudiant->cin = "";
            $etudiant->email = "";
            return view('home.reclamation');         
         }

         public function about(){
            return view('home.about');
         }

}
