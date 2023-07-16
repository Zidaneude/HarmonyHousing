<?php

use App\Models\Chambre;
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
        Schema::create('appartement_chambres', function (Blueprint $table) {
            $table->foreignIdFor(Chambre::class)->onDelete('cascade');
            $table->foreignIdFor(Appartement::class)->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appartement_chambres');
    }
};
