<?php

namespace Database\Seeders;

use App\Models\Demande;
use App\Models\Etudiant;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class DemandeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Fetching 5 students that were seeded earlier
        $students = Etudiant::all();

        // Insert 5 demandes (requests) linked to the students
        Demande::insert([
            [
                'etudiant_id' => $students[0]->id, // Reference to the first student
                'nom' => $students[0]->nom,
                'apogee' => $students[0]->apogee,
                'cin' => $students[0]->cin,
                'email' => $students[0]->email,
                'type_demande' => 'Lettre de recommandation',
                'date_demande' => Carbon::now()->subDays(10),
                'entreprise' => 'Company A',
                'filiere' => $students[0]->filiere,
                'cycle' => 'CI2',
                'periode' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'etudiant_id' => $students[1]->id, // Reference to the second student
                'nom' => $students[1]->nom,
                'apogee' => $students[1]->apogee,
                'cin' => $students[1]->cin,
                'email' => $students[1]->email,
                'type_demande' => 'Convention de stage',
                'date_demande' => Carbon::now()->subDays(5),
                'entreprise' => 'Company B',
                'filiere' => $students[1]->filiere,
                'cycle' => 'CI2',
                'periode' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'etudiant_id' => $students[2]->id, // Reference to the third student
                'nom' => $students[2]->nom,
                'apogee' => $students[2]->apogee,
                'cin' => $students[2]->cin,
                'email' => $students[2]->email,
                'type_demande' => 'Relevé de notes',
                'date_demande' => Carbon::now()->subDays(20),
                'entreprise' => null,
                'filiere' => 'GC',
                'cycle' => 'CI2',
                'periode' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'etudiant_id' => $students[3]->id, // Reference to the fourth student
                'nom' => $students[3]->nom,
                'apogee' => $students[3]->apogee,
                'cin' => $students[3]->cin,
                'email' => $students[3]->email,
                'type_demande' => 'Attestation de scolarité',
                'date_demande' => Carbon::now()->subDays(7),
                'entreprise' => 'Company C',
                'filiere' => 'GM',
                'cycle' => 'CI2',
                'periode' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'etudiant_id' => $students[4]->id, 
                'nom' => $students[4]->nom,
                'apogee' => $students[4]->apogee,
                'cin' => $students[4]->cin,
                'email' => $students[4]->email,
                'type_demande' => 'Lettre de recommandation',
                'date_demande' => Carbon::now()->subDays(2),
                'entreprise' => 'Company D',
                'filiere' => 'SCM',
                'cycle' => 'CI2',
                'periode' => 5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ]);
    }
}
