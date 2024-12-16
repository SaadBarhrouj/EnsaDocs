<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\etudiantModel;
use App\Http\Models\Demande;
use Barryvdh\DomPDF\Facade\Pdf;
class ConventionController extends Controller
{
public function downloadPDF()
{

    $demande = (object)[
        'entreprise' => 'Aéroport Tétouan Saniat R\'mel',
        'periode' => 2,
    ];

    // Mock etudiant data
    $etudiant = (object)[
        'nom' => 'IABAKRIMAN',
        'prenom' => 'KAOUTAR',
        'filiere' => 'Génie Informatique',
    ];
       
    
    //$convention = Convention::with('etudiant')->findOrFail($id);

        //$etudiant = $convention->etudiant;

   
    $pdf = Pdf::loadView('pdf.convention_stage', compact('demande', 'etudiant'));

    

    

    // Return the PDF as a downloadable response
    return $pdf->download('convention_stage.pdf');
}
}