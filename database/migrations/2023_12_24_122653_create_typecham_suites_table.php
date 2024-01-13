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
        Schema::create('typecham_suites', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('Disponibilite');
            $table->string('descriptionchambre');
            $table->integer('numchambre');
            $table->float('prixnuit');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('typecham_suites');
    }
};
