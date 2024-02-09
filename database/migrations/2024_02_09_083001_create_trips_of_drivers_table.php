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
        Schema::create('trips_of_drivers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('driver_id');
            $table->unsignedBigInteger('horaire_id');        
            $table->time('start_time')->default(null);
            $table->time('end_time')->default(null);

            $table->foreign('driver_id')->references('id')->on('drivers');
            $table->foreign('horaire_id')->references('id')->on('horaires');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trips_of_drivers');
    }
};
