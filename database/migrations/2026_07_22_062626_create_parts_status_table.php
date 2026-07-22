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
        Schema::create('parts_status', function (Blueprint $table) {
            $table->comment('Dump table for extract file Parts_Status.csv.');
            $table->increments('id');
            $table->string('part_number', 30)->nullable();
            $table->string('part_description', 75)->nullable();
            $table->string('part_type', 50)->nullable();
            $table->smallInteger('ro_qty')->nullable();
            $table->string('vendor_name', 75)->nullable();
            $table->string('po_number', 25)->nullable();
            $table->smallInteger('ordered_qty')->nullable();
            $table->date('expected_delivery')->nullable();
            $table->smallInteger('received_qty')->nullable();
            $table->smallInteger('returned_qty')->nullable();
            $table->smallInteger('line')->nullable();
            $table->string('ro_num', 15)->nullable();
            $table->dateTime('order_date')->nullable();
            $table->dateTime('invoice_date')->nullable();
            $table->string('location', 50)->nullable();
            $table->unsignedTinyInteger('loc_id')->nullable()->default(0);
            $table->string('part_status', 15)->nullable();
            $table->string('repair_code', 20)->nullable();
            $table->decimal('part_price', 10)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parts_status');
    }
};
