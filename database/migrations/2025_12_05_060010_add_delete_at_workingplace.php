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
        //
        Schema::table('workingplace', function (Blueprint $table) {
             $table->string('detele_at')->nullable();
        });
           
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::table('workingplace', function (Blueprint $table) {
             $table->string('detele_at')->nullable();
        });
    }
};
