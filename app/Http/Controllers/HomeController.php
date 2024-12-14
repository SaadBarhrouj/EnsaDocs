<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
  
      public function home(){
         return view('home.index');
      }

      public function demande(){
            return view('home.demande');
         }

         public function reclamation(){
            return view('home.reclamation');
         }

}
