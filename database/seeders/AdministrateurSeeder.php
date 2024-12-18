<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\administrateur;
use Illuminate\Support\Facades\Hash;

class AdministrateurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create default admin
        administrateur::create([
            'nom' => 'bens', // Admin username
            'password' => Hash::make('1234'), // Admin password (hashed)
        ]);
    }
}
