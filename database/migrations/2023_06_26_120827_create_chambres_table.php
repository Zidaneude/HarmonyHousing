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
        Schema::create('chambres', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->String('meuble');
            $table->date('disponibilite')->nullable();
            $table->integer('nbre_bain');
            $table->integer('superficie');
            $table->integer('capacite');
            $table->double('prix');
            $table->string('photos1')->nullable();
            $table->string('photos2')->nullable();
            $table->string('photos3')->nullable();
            $table->foreignId('logement_id')->constrained();
           // $table->foreignId('appartement_id')->constrained()->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chambres');
    }
};
