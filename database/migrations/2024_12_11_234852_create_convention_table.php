<?php

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
        Schema::create('convention', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_etudiant')->constrained('etudiant')->onDelete('cascade');
            $table->string('nom_entreprise');
            $table->integer('duree_stage'); // Duree du stage en mois
            $table->string('ville_stage');
            $table->year('annee_universaitaire'); // Utilisation de 'year' si vous ne voulez que l'année
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('convention');
    }
};
