<?php

namespace App\Http\Controllers;

use App\Models\Demande;
use App\Models\Etudiant;
use App\Models\HistoriqueDemandes;
use App\Models\reclamations;
use Database\Seeders\DemandeSeeder;
use Exception;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{

    public function get_reclamation(Request $request) {
        try {
            $etudiant = Etudiant::where('cin', $request->cin)
                                ->where('nom', $request->nom)
                                ->where('apogee', $request->input('code-apogee'))
                                ->where('email', $request->email)
                                ->first(); 
            if (!$etudiant) {
                return back()->with('error', "Vos données ne sont pas correctes!");
            }
            $demandes = HistoriqueDemandes
                              ::where('email', $request->email)
                              ->where('decision', 'rejected')
                              ->get();
            if ($demandes->isEmpty()) {
                return redirect()->back()->with('error', 'Il n\'y a pas de demande rejetée à réclamer');
            }
            return redirect()->route('home.reclamation')->with([
                'demandes' => $demandes,
                'etudiant' => $etudiant
            ]);
        } catch (Exception $e) {
            return back()->with('error', "Une erreur est survenue, veuillez réessayer plus tard. $e");
        }
    }
    

    public function ajouter_reclamation(Request $request)
    {
       try {
        $request->validate([
            'nomToSend' => 'required|string|max:255',
            'apogeeToSend' => 'required|string|max:50',
            'cinToSend' => 'required|string|max:20',
            'emailToSend' => 'required',
            'message' => 'required|string|max:1000',
        ]);
        $demande = HistoriqueDemandes::where('apogee', $request->input('apogeeToSend'))
        ->where('type_demande', $request->reclamation_type)
        ->first();
        if ($demande) {
            $reclamation = new reclamations;
            $reclamation->nom = $request->nomToSend;
            $reclamation->code_apogee = $request->input('apogeeToSend');
            $reclamation->cin = $request->cinToSend;
            $reclamation->email = $request->emailToSend;
            $reclamation->reclamation = $request->message;
            $reclamation->id_demande = $demande->id;        
            $reclamation->date_envoi = now(); 
            $reclamation->save();
        }
        return redirect()->back()->with('success', "Réclamation envoyée avec succès!");
    } catch (Exception $e) {
        return back()->with('error', "Une erreur est survenue, veuillez réessayer plus tard. " . $e->getMessage());
    }
    }

}
