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
        Schema::create('pending_returns', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedSmallInteger('RO');
            $table->string('Owner', 50)->nullable();
            $table->string('Vehicle', 75)->nullable();
            $table->string('Vendor', 50);
            $table->string('Return_Number', 12);
            $table->date('Pickup_Date')->nullable()->comment('Vendor Pickup Date');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pending_returns');
    }
};
