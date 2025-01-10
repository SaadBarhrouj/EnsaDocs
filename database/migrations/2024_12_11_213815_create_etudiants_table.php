<?php

use App\Models\Etudiant;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('etudiants', function (Blueprint $table) {
            $table->id();
            $table->string('apogee')->unique();
            $table->string('nom'); 
            $table->string('email')->unique();
            $table->string('cin')->unique();
            $table->string('cne')->unique();
            $table->date('date_naissance');
            $table->string('lieu_naissance');
            $table->string('filiere');        
            $table->timestamps();    
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('etudiant');
    }
};
