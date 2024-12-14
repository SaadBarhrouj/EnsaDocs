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
        Schema::create('gi', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_etudiant')->constrained('etudiant')->onDelete('cascade');
            $table->float('prog_avancee');
            $table->float('electro_numerique');
            $table->float('theorie_graphes');
            $table->float('theorie_langages');
            $table->float('genie_logiciel');
            $table->float('management');
            $table->date('annee_universitaire');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gi');
    }
};
