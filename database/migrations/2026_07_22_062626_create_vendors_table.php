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
        Schema::create('vendors', function (Blueprint $table) {
            $table->comment('Lists current vendor info including phone, address, and email address.');
            $table->increments('id');
            $table->string('name', 100);
            $table->boolean('oem')->nullable();
            $table->string('phone_number', 30)->nullable();
            $table->string('address', 50)->nullable();
            $table->string('city', 20)->nullable();
            $table->string('state', 2)->nullable();
            $table->string('zipcode', 10)->nullable();
            $table->string('email', 35)->nullable();
            $table->unsignedSmallInteger('location_id')->default(0)->comment('Shop ID depending on Location table.');
            $table->string('shop_location', 50)->nullable()->comment('Shop Location');
            $table->boolean('opt_oem')->nullable()->default(false)->comment('Does vendor sell Opt OEM parts?');
            $table->boolean('aftermarket')->nullable()->comment('Does vendor sell aftermarket parts?');
            $table->boolean('preferred')->nullable()->default(false)->comment('Is this a preferred vendor?');
            $table->boolean('electronic')->nullable()->default(false)->comment('Can we order electronically to this vendor?');
            $table->unsignedMediumInteger('vendor_ID')->nullable()->default(0)->comment('Vendor ID assigned by CCC One');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vendors');
    }
};
