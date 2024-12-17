<?php

namespace Database\Seeders;

use App\Models\etudiantModel;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class EtudiantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create 5 records for the etudiant table
        etudiantModel::insert([
            [
                'apogee' => '123456789',
                'nom' => 'John Doe',
                'email' => 'johndoe@example.com',
                'cin' => 'CIN123456',
                'cne' => 'CNE123456',
                'date_naissance' => Carbon::create('2000', '01', '01'),
                'lieu_naissance' => 'Casablanca',
                'filiere' => 'GI',
            ],
            [
                'apogee' => '123456790',
                'nom' => 'Jane Smith',
                'email' => 'janesmith@example.com',
                'cin' => 'CIN123457',
                'cne' => 'CNE123457',
                'date_naissance' => Carbon::create('1999', '05', '15'),
                'lieu_naissance' => 'Rabat',
                'filiere' => 'GSTR',
            ],
            [
                'apogee' => '123456791',
                'nom' => 'Alice Brown',
                'email' => 'alicebrown@example.com',
                'cin' => 'CIN123458',
                'cne' => 'CNE123458',
                'date_naissance' => Carbon::create('2001', '09', '10'),
                'lieu_naissance' => 'Fes',
                'filiere' => 'GC',
            ],
            [
                'apogee' => '123456792',
                'nom' => 'Bob Martin',
                'email' => 'bobmartin@example.com',
                'cin' => 'CIN123459',
                'cne' => 'CNE123459',
                'date_naissance' => Carbon::create('2000', '02', '25'),
                'lieu_naissance' => 'Marrakech',
                'filiere' => 'GM',
            ],
            [
                'apogee' => '123456793',
                'nom' => 'Emily White',
                'email' => 'emilywhite@example.com',
                'cin' => 'CIN123460',
                'cne' => 'CNE123460',
                'date_naissance' => Carbon::create('2002', '12', '20'),
                'lieu_naissance' => 'Tangier',
                'filiere' => 'SCM',
            ]
        ]);
    }
}
