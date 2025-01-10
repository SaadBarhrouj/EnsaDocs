<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReleveDeNoteTable extends Migration
{
    public function up()
    {
        Schema::create('releve_de_note', function (Blueprint $table) {
            $table->id();
            $table->foreignId('document_id')->constrained('documents')->onDelete('cascade'); // Foreign key to documents table
            $table->string('filiere');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('releve_de_note');
    }
}
