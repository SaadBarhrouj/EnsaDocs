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
            ]); // Enum field for document types
            $table->date('date_demande');
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
