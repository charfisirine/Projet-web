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
            $table->date('date_debut');
            $table->date('date_fin');

            $table->unsignedBigInteger('hotelID');
            $table->foreign('hotelID')
                ->references('id')
                ->on('hotels')
                ->onDelete('restrict') //cela signifie que les lignes liées ne peuvent pas être supprimées ou mises à jour s'il existe des lignes dépendantes dans une autre table.
                ->onUpdate('restrict');

            $table->unsignedBigInteger('chambreID');
            $table->foreign('chambreID')
                ->references('id')
                ->on('chambres')
                ->onDelete('restrict')
                ->onUpdate('restrict');

                $table->unsignedBigInteger('userID');
                $table->foreign('userID')
                    ->references('id')
                    ->on('utilisateurs')
                    ->onDelete('restrict') //cela signifie que les lignes liées ne peuvent pas être supprimées ou mises à jour s'il existe des lignes dépendantes dans une autre table.
                    ->onUpdate('restrict');

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
