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
        Schema::create('appartements', function (Blueprint $table) {
            $table->id();
           // $table->string('titre');
            $table->double('prix');
            $table->String('meuble');
            $table->integer('nbre_bain');
            $table->integer('nombre_chambre')->min(1);
            $table->date('disponibilite');
            $table->foreignId('logement_id')->constrained();
            $table->timestamps();
            // $table->integer('nombre_salles_bain')->min(0)->max(3);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appartements');
    }
};
