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
            $table->string('nomclient');

            $table->unsignedBigInteger('hotelID');
            $table->foreign('hotelID')
                ->references('id')
                ->on('hotels')
                ->onDelete('restrict')
                ->onUpdate('restrict');   
             
            $table->unsignedBigInteger('chambreID');
            $table->foreign('chambreID')
                ->references('id')
                ->on('chambres')
                ->onDelete('restrict')
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
