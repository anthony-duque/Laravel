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
            $table->string('ro_number', 15);
            $table->string('owner', 50)->nullable();
            $table->string('vehicle', 75)->nullable();
            $table->string('vendor', 50);
            $table->string('return_number', 12);
            $table->date('pickup_date')->nullable()->comment('Vendor Pickup Date');
            $table->unsignedSmallInteger('shop_id')->nullable();
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
