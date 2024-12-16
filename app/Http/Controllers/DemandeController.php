<?php

// DemandeController.php

// app/Http/Controllers/DemandeController.php

namespace App\Http\Controllers;

use App\Models\Demande;
use Illuminate\Http\Request;

class DemandeController extends Controller
{
    public function index()
    {
        $demandes = Demande::all();
        return view('demandes_en_cours', compact('demandes'));
    }
}