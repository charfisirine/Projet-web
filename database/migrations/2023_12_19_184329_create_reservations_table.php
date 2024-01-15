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
            $table->unsignedBigInteger('hotelID');
            $table->foreign('hotelID')
                ->references('id')
                ->on('hotels')
                ->onDelete('restrict') //cela signifie que les lignes liées ne peuvent pas être supprimées ou mises à jour s'il existe des lignes dépendantes dans une autre table.
                ->onUpdate('restrict');
            $table->string('type');
            $table->string('nom');
            $table->string('prenom');
            $table->string('email');
            $table->integer('numero_tel');
            $table->date('date_debut');
            $table->date('date_fin');
            
            $table->integer('nombre_personnes');
            $table->timestamps();
            $table->string('message');

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
