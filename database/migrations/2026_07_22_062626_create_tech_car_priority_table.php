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
        Schema::create('tech_car_priority', function (Blueprint $table) {
            $table->comment('Tracks the priority of cars assigned to each technician.');
            $table->increments('id');
            $table->char('technician', 15);
            $table->unsignedInteger('ro_num');
            $table->unsignedTinyInteger('priority');
            $table->unsignedTinyInteger('location_id');
            $table->string('dept_code', 12);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tech_car_priority');
    }
};
