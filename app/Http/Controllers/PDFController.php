<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;

class PDFController extends Controller
{
    public function ReleveNotePDF()
    {
  
        $etudiant = [
            'date' => Carbon::now()->format('d/m/Y'),
            'nom' => 'EL MOURABET',
            'prenom' => 'NADA',
            'filiere' => 'Génie Informatique',
            'cin' => 'P123456',
            'cne' => 'L123456',
            'lieu_naissance' => 'Tétouan',
            'date_naissance' => '2002-10-09',
        ];

        $notes = [
            'prog_avancee' => 15.5,
            'electro_numerique' => 14.0,
            'theorie_graphes' => 16.0,
            'theorie_langages' => 17.5,
            'genie_logiciel' => 18.0,
            'management' => 16.5,
            'annee_universitaire' => '2024-2025',
        ];

        $totalNotes = $notes['prog_avancee'] + $notes['electro_numerique'] + $notes['theorie_graphes'] +
                      $notes['theorie_langages'] + $notes['genie_logiciel'] + $notes['management'];
        $notes['moyenne'] = $totalNotes / 6;

 
        $pdf = Pdf::loadView('pdf.releve_note', compact('etudiant', 'notes'))
                 ->setPaper('a4', 'portrait');

 
        return $pdf->stream('releve_note.pdf');
    }

    public function LettreRecommendationPDF()
    {

        $etudiant = [
            'date' => Carbon::now()->format('d/m/Y'),
            'nom' => 'EL MOURABET',
            'prenom' => 'NADA',
            'filiere' => 'Génie Informatique',
            'date_naissance' => '2002-10-09',
            'lieu_naissance' => 'Tétouan',
        ];

        $date = Carbon::now()->format('d/m/Y');

        $pdf = Pdf::loadView('pdf.lettre_recommendation', compact('etudiant'))
                 ->setPaper('a4', 'portrait');

        return $pdf->stream('lettre_recommendation.pdf');//je peux changer stream par download pour la telecharger dans le
    }
}