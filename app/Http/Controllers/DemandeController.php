<?php

// DemandeController.php

// app/Http/Controllers/DemandeController.php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\demande; // Ensure the model name is correct
use Illuminate\Http\Request;
use App\Models\historique_demandes;

class DemandeController extends Controller
{
    public function index()
    {
        $demandes = demande::all();
        return view('demandes_en_cours', compact('demandes'));
    }

    public function his()
    {
        // Fetch all records from the historiques_demande table
        $demandes = DB::table('historique_demandes')->get();

        // Pass the data to the view
        return view('historiques_demandes', compact('demandes'));
    }

   
}