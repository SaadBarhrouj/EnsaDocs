<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
 
    public function up(): void
    {
        Schema::create('reclamations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_demande')->constrained('historique_demandes')->onDelete('cascade');
            $table->string('nom');
            $table->string('code_apogee');
            $table->string('cin');
            $table->string('email');
            $table->text('reclamation');
            
            $table->timestamp('date_envoi')->useCurrent();
            
            $table->timestamps();  
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reclamations');
    }
};
