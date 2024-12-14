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
        Schema::create('historique_reclamations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_demande')->constrained('historique_demandes')->onDelete('cascade');
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
        Schema::dropIfExists('historique_reclamations');
    }
};
