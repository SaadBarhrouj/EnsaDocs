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
        Schema::create('historique_demandes', function (Blueprint $table) {
            $table->id(); 
            $table->foreignId('id_etudiant')->constrained('etudiant');
            $table->foreignId('id_type')->constrained('document');
            $table->string('type_demande');
            $table->boolean('etat_demande');
            $table->date('date_demande')->constrained('demande');
            $table->date('date_reponse');

        

        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('historique_demandes');
    }
};
