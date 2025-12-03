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
        Schema::create('salary', function (Blueprint $table) {
            $table->id();
            $table->string('day_of_work')->nullable();
            $table->string('work_in_day')->nullable();
            $table->integer('amount')->nullable();
            $table->integer('total_amount')->nullable();
            $table->integer('management_amount')->nullable();
            $table->string('status')->defualt();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('salary');
    }
};
