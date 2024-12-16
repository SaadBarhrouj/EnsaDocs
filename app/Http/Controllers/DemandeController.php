<?php

// DemandeController.php

// app/Http/Controllers/DemandeController.php

namespace App\Http\Controllers;

use App\Models\demande; // Ensure the model name is correct
use Illuminate\Http\Request;

class DemandeController extends Controller
{
    public function index()
    {
        $demandes = demande::all();
        return view('demandes_en_cours', compact('demandes'));
    }
}