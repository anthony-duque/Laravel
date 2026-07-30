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
        Schema::create('repairs', function (Blueprint $table) {
            $table->comment('List of active vehicles (pre-ordered and cars in shop).');
            $table->increments('id');
            $table->string('ro_number', 15);
            $table->string('owner', 50);
            $table->string('vehicle', 100);
            $table->dateTime('vehicle_in')->nullable();
            $table->string('technician', 30)->nullable();
            $table->string('current_phase', 50);
            $table->float('parts_received')->nullable();
            $table->string('estimator', 30)->nullable();
            $table->string('vehicle_color', 30)->nullable();
            $table->string('license_plate', 12)->nullable();
            $table->dateTime('scheduled_out')->nullable();
            $table->unsignedSmallInteger('shop_id')->nullable()->default(0)->comment('Location ID');
            $table->string('insurance', 100)->nullable();
            $table->string('vin', 20)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('repairs');
    }
};
