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
        Schema::create('taxis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('drivers_id');
            $table->text('description')->nullable();
            $table->string('plate_number');
            $table->string('vehicle_type');
            $table->enum('status', ['Available', 'En route', 'Not available'])->default('Not available');
            $table->string('payment_method');
            $table->foreign('drivers_id')->references('id')->on('drivers')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('taxes');
    }
};
