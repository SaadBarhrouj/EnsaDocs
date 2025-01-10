<?php

namespace Database\Seeders;

use App\Models\Etudiant;
use App\Models\gi;
use Illuminate\Database\Seeder;

class NotesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $students = Etudiant::all();
        gi::insert([
            [
                'etudiant_id'        => $students[0]->id,       // Student ID
                'prog_avancee'       => 16.5,
                'electro_numerique'  => 14.5,
                'theorie_graphes'    => 12.5,
                'theorie_langages'   => 15.0,
                'genie_logiciel'     => 17.0,
                'management'         => 14.0,
                // Use any valid date for your academic year
                'annee_universitaire'=> '2023',
            ],
        ]);
    }
}
