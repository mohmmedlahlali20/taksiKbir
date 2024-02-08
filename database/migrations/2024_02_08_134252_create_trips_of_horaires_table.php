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
        Schema::create('trips_of_horaires', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('driver_id');
            $table->unsignedBigInteger('horaire_id');        
            $table->time('start_time')->nullable();
            $table->time('end_time')->nullable();
        
            $table->foreign('driver_id')->references('id')->on('drivers');
            $table->foreign('horaire_id')->references('id')->on('horaires'); // Correction du nom de la table ici
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trips_of_horaires');
    }
};
