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
        Schema::create('HistoriqueDemandes', function (Blueprint $table) {
            $table->id(); 
            $table->foreignId('etudiant_id')->constrained('etudiants');
            $table->string('nom');
            $table->string('apogee');
            $table->string('email');
            $table->date('date_demande')->constrained('demande');
            $table->string('type_demande');
            $table->enum('decision', ['validated', 'rejected'])->nullable();
            $table->date('date_reponse');

        

        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('HistoriqueDemandes');
    }
};
