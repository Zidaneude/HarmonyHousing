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
            $table->string('code postal')->unique();
            $table->text('description')->nullable();
            $table->string('photos');
            $table->string('quartier');
            $table->boolean('statut');
            $table->double('prix')->nullable(false)->min(0);
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
