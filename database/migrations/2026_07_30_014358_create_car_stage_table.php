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
            $table->string('ro_number', 15);
            $table->unsignedSmallInteger('shop_id');
            $table->unsignedTinyInteger('sequence_number');
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
