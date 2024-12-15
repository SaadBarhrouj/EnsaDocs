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
        Schema::create('demande', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_etudiant')->constrained('etudiant')->onDelete('cascade');
            $table->string('nom');
            $table->string('apogee');
            $table->string('cin');
            $table->string('email');
            $table->enum('type_demande', [
                'Lettre de recommandation',
                'Convention de stage',
                'Relevé de notes',
                'Attestation de scolarité'
            ]); 
            $table->date('date_demande');
            $table->string('entreprise')->nullable();
            $table->enum('filiere', [
                'GI',
                'GSTR',
                'GC',
                'GM',
                'SCM',
                'BD'
            ])->nullable(); 
            $table->enum('cycle', [
                '2AP1',
                '2AP2',
                'CI1',
                'CI2',
                'CI3',
            ])->nullable(); 
            $table->integer('periode')->nullable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('demande');
    }
};
