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
        Schema::create('Historique_reclamations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_demande')->constrained('HistoriqueDemandes')->onDelete('cascade');
            $table->string('nom')->nullable();
            $table->string('email')->nullable();
            $table->string('apogee')->nullable();
            $table->string('type_document')->nullable();
            $table->timestamp('date_reclamation')->nullable();
            $table->text('reclamation');
            $table->text('response')->nullable();
            $table->date('date_reponse')->nullable();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Historique_reclamations');
    }
};
