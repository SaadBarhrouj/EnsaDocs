<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\etudiantModel;
use Barryvdh\DomPDF\Facade\Pdf;

class AttestationController extends Controller
{
    public function generateAttestation()
    {
        $etudiant =  [
            'nom' => 'Iabakriman',
            'prenom' => 'Kaoutar',
            'apogee' => '123456789',
            'email' => 'kaoutar.iabakriman@ensat.ac.ma',
            'cin' => 'L636307',
            'cne' =>'P123759',
            'date_naissance' =>'2002-05-18',
            'lieu_naissance' =>'hoceima',
            'filiere' =>'Genie informatique'
        ];
        // $student = Etudiant::findOrFail($studentId);

        $pdf = Pdf::loadView('pdf.attestation_scolarite', compact('etudiant'));
        return $pdf->download('attestation_scolarite.pdf');
    }
}
