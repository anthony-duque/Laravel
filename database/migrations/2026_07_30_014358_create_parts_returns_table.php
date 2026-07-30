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
        Schema::create('parts_returns', function (Blueprint $table) {
            $table->comment('Tracks parts that have been returned to vendors.');
            $table->mediumIncrements('id');
            $table->string('ro_number', 15);
            $table->date('return_date');
            $table->date('vendor_pickup_date')->nullable();
            $table->string('part_number', 30);
            $table->string('part_description', 75);
            $table->string('part_type', 20)->nullable();
            $table->decimal('amount', 10)->nullable();
            $table->string('invoice_number', 15);
            $table->string('reason', 25)->nullable();
            $table->string('vendor_name', 50);
            $table->unsignedSmallInteger('shop_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parts_returns');
    }
};
