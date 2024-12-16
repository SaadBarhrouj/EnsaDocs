<?php

namespace App\Http\Controllers;

use App\Models\Demande;
use App\Models\etudiantModel;
use App\Models\reclamations;


use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    public function ajouter_reclamation(Request $request)
    {
       
        $request->validate([
            'nom' => 'required|string|max:255',
            'code-apogee' => 'required|string|max:50',
            'cin' => 'required|string|max:20',
            'email' => [
                'required',
                'email',
                'max:255',
                'regex:/^[a-zA-Z0-9._%+-]+@etu\.uae\.ac\.ma$/',
            ],
            'message' => 'required|string|max:1000',
        ]);

        $reclamation = new reclamations;
        $reclamation->nom = $request->nom;
        $reclamation->code_apogee = $request->input('code-apogee');
        $reclamation->cin = $request->cin;
        $reclamation->email = $request->email;
        $reclamation->reclamation = $request->message;
        $reclamation->id_demande = 1;        
        $reclamation->date_envoi = now(); 
        $reclamation->save();
  
        if (!$reclamation) {
            toastr()->error('Aucune demande trouvée pour cet Etudiant. Veuillez soumettre une demande d\'abord.');
            return redirect()->back(); 
        }else{
        toastr()->timeOut(10000)
               ->closeButton()
               ->success('Votre réclamation a été soumise avec succès. Veuillez patienter pour une réponse.');


            }
        return view('home.index');
    

        }

}
