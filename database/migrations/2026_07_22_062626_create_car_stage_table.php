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
        Schema::create('car_stage', function (Blueprint $table) {
            $table->comment('Tracks the production stage of cars.');
            $table->increments('id');
            $table->unsignedInteger('ro_num');
            $table->unsignedSmallInteger('loc_id');
            $table->tinyInteger('stage_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('car_stage');
    }
};
