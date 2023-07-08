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
        Schema::create('logements', function (Blueprint $table) {
            $table->id();
            $table->string('ville');
            $table->string('code_postal')->nullable();
           // $table->text('description')->nullable();
            $table->string('quartier');
            $table->string('adresse');
            $table->string('frequence_paie');
            $table->string('region');
           // $table->double('prix')->nullable(false);
           // $table->string('statut')->nullable();
            //$table->string('meuble');
            $table->string('photos1')->nullable();
            $table->string('photos2')->nullable();
            $table->string('photos3')->nullable();
            $table->foreignId('offre_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('logements');
    }
};
