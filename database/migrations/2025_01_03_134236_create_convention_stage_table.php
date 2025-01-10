<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('convention_de_stage', function (Blueprint $table) {
            $table->id();
            $table->foreignId('document_id')->constrained('documents')->onDelete('cascade'); // Foreign key to documents table
            $table->string('filiere');
            $table->string('enterprise_name');
            $table->string('stage_duration');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('convention_de_stage');
    }
};