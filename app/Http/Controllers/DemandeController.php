<?php

// DemandeController.php

// app/Http/Controllers/DemandeController.php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Demande; // Ensure the model name is correct
use App\Models\historique_reclamations;
use Illuminate\Http\Request;
use App\Models\HistoriqueDemandes;
use App\Models\reclamations;
use Exception;

class DemandeController extends Controller
{
    public function index()
    {
        $demandes = Demande::all();
        return view('demandes_en_cours', ['demandes' => $demandes, 'current' => ""]);
    }

    public function his()
    {
        $demandes = DB::table('HistoriqueDemandes')->get();
        return view('historiques_demandes', ['demandes' => $demandes, "current" => ""]);
    }

    public function filterByDemandeHistoriques(string $query)
    {
        try {
        if ($query == "t")
            $query = "";
        $demandes = HistoriqueDemandes::where('type_demande', 'like', "%$query%")->get();
        return view('historiques_demandes', ["demandes" => $demandes, "current" => $query]);
        }
        catch (Exception $e) {
            return back()->with('error', "Une erreur est survenue");
        }
    }
    
    public function filterByDemandeEncours(string $query)
    {
        try {
        if ($query == "t") {
            $demandes = Demande::all();
            $query = "";
        }
        else
        $demandes = Demande::where('type_demande', 'like', "%$query%")->get();
        return view('demandes_en_cours', ["demandes" => $demandes, 'current' => $query]);
        }
        catch (Exception $e) {
            return back()->with('error', "Une erreur est survenue");
        }
    }

    public function filterByReclamationHistoriques(string $query)
    {
        try {
            if ($query == "t")
                $query = "";
        $reclamations = historique_reclamations::where('type_demande', 'like', "%$query%")->get();
        return view('historiques_reclamations', ["data" => $reclamations, "current" => $query]);
        }
        catch (Exception $e) {
            return back()->with('error', "Une erreur est survenue");
        }
    }
    
    public function filterByReclamationEncours(string $query)
    {
        try {
            if ($query == "t")
                $query = "";
            $reclamations = reclamations::with('demande')
            ->whereHas('demande', function($q) use ($query) {
                $q->where('type_demande', 'like', "%$query%");
            })
            ->get();
        return view('reclamations_en_cours', ["data" => $reclamations, 'current' => $query]);
        }
        catch (Exception $e) {
            return back()->with('error', "Une erreur est survenue");
        }
    }
   
}