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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('utilisateur_id')->constrained(); // Ajout d'une clé étrangère vers la table 'utilisateurs'
            $table->foreignId('hotel_id')->constrained(); // Ajout d'une clé étrangère vers la table 'hotels'
            $table->date('date_debut');
            $table->date('date_fin');
            $table->integer('nombre_personnes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
