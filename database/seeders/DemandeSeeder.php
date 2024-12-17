<?php

namespace Database\Seeders;

use App\Models\Demande;
use App\Models\etudiantModel;
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
        $students = etudiantModel::all();

        // Insert 5 demandes (requests) linked to the students
        Demande::insert([
            [
                'id_etudiant' => $students[0]->id, // Reference to the first student
                'nom' => 'John Doe',
                'apogee' => $students[0]->apogee,
                'cin' => 'CIN123456',
                'email' => 'yssef4516@gmail.com',
                'type_demande' => 'Lettre de recommandation',
                'date_demande' => Carbon::now()->subDays(10),
                'entreprise' => 'Company A',
                'filiere' => 'GI',
                'cycle' => '2AP1',
                'periode' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_etudiant' => $students[1]->id, // Reference to the second student
                'nom' => 'Jane Smith',
                'apogee' => $students[1]->apogee,
                'cin' => 'CIN123457',
                'email' => 'janesmith@example.com',
                'type_demande' => 'Convention de stage',
                'date_demande' => Carbon::now()->subDays(5),
                'entreprise' => 'Company B',
                'filiere' => 'GSTR',
                'cycle' => 'CI1',
                'periode' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_etudiant' => $students[2]->id, // Reference to the third student
                'nom' => 'Alice Brown',
                'apogee' => $students[2]->apogee,
                'cin' => 'CIN123458',
                'email' => 'alicebrown@example.com',
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
                'id_etudiant' => $students[3]->id, // Reference to the fourth student
                'nom' => 'Bob Martin',
                'apogee' => $students[3]->apogee,
                'cin' => 'CIN123459',
                'email' => 'bobmartin@example.com',
                'type_demande' => 'Attestation de scolarité',
                'date_demande' => Carbon::now()->subDays(7),
                'entreprise' => 'Company C',
                'filiere' => 'GM',
                'cycle' => 'CI3',
                'periode' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_etudiant' => $students[4]->id, 
                'nom' => 'Emily White',
                'apogee' => $students[4]->apogee,
                'cin' => 'CIN123460',
                'email' => 'emilywhite@example.com',
                'type_demande' => 'Lettre de recommandation',
                'date_demande' => Carbon::now()->subDays(2),
                'entreprise' => 'Company D',
                'filiere' => 'SCM',
                'cycle' => '2AP2',
                'periode' => 5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ]);
    }
}
