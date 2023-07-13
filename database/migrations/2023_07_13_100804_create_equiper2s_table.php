<?php

use App\Models\Equipement;
use App\Models\Appartement;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('equiper2s', function (Blueprint $table) {
            $table->foreignIdFor(Appartement::class)->onDelete('cascade');
            $table->foreignIdFor(Equipement::class)->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('equiper2s');
    }
};
