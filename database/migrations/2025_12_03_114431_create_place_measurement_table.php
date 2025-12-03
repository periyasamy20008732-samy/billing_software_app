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
        Schema::create('place_measurement', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('square_fit')->nullable();
            $table->float('north_measurement')->nullable();
            $table->float('south_measurement')->nullable();
            $table->float('east_measurement')->nullable();
            $table->float('west_measurement')->nullable();
            $table->float('total_measurement')->nullable();
            $table->string('amount_by_square_fit')->nullable();
            $table->integer('bed_rooms')->nullable();
            $table->integer('rest_rooms')->nullable();
            $table->integer('hall')->nullable();
            $table->integer('tank_up')->nullable();
            $table->integer('tank_down')->nullable();
            $table->integer('tank_volume_up')->nullable();
            $table->integer('tank_volume_down')->nullable();
            $table->string('delete_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('place_measurement');
    }
};
