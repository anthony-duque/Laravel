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
        Schema::create('scheduled_in_vin', function (Blueprint $table) {
            $table->comment('Scheduled In, VIN, RO Hours, Assigned Hours, Estimate Amount, Total Loss');
            $table->increments('id');
            $table->date('scheduled_in')->nullable()->comment('Scheduled In Date');
            $table->unsignedMediumInteger('ro_num')->comment('Repair Order Number');
            $table->string('vin', 17)->nullable()->comment('Vehicle Identification Number');
            $table->float('ro_hours')->nullable()->default(0)->comment('Number of hours to fix the vehicle.');
            $table->float('assigned_hours')->nullable()->default(0)->comment('Number of assigned hours.');
            $table->float('estimate_amt')->nullable()->default(0)->comment('Estimate amount the vehicle repair would cost.');
            $table->boolean('total_loss')->nullable()->default(false);
            $table->string('location', 50)->nullable()->comment('Shop Location');
            $table->unsignedSmallInteger('loc_id')->nullable()->default(0)->comment('Location ID set depending on the value in Location_ID table.');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('scheduled_in_vin');
    }
};
