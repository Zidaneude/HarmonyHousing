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
            $table->string('code_postal')->unique();
            $table->text('description')->nullable();
            $table->string('quartier');
            $table->double('prix')->nullable(false);
            $table->string('statut');
            $table->string('photos1')->unique();
            $table->string('photos2')->unique()->nullable();
            $table->string('photos3')->unique()->nullable();
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
