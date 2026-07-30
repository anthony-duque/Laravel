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
        Schema::create('extract_file_dump', function (Blueprint $table) {
            $table->comment('Dumping table for CCC extract file upload.');
            $table->increments('id');
            $table->string('shop_code', 15);
            $table->string('shop_name', 60);
            $table->string('ro_number', 15)->comment('Repair Order Number');
            $table->string('estimator', 50)->nullable();
            $table->string('technician', 50)->nullable();
            $table->string('owner', 50)->nullable();
            $table->string('vehicle_color', 30)->nullable();
            $table->string('license_plate', 15)->nullable();
            $table->unsignedSmallInteger('vehicle_year')->nullable();
            $table->string('vehicle_make', 35)->nullable();
            $table->string('vehicle_model', 90)->nullable();
            $table->string('current_phase', 20)->nullable();
            $table->unsignedSmallInteger('line_number')->nullable();
            $table->string('repair_code', 20)->nullable();
            $table->string('part_desc', 50)->nullable();
            $table->string('part_num', 25)->nullable();
            $table->string('part_type', 15)->nullable();
            $table->string('part_status', 25)->nullable();
            $table->string('vendor_name', 50)->nullable();
            $table->decimal('part_price', 10)->nullable();
            $table->tinyInteger('ro_quantity')->nullable();
            $table->date('order_date')->nullable();
            $table->tinyInteger('order_quantity')->nullable();
            $table->tinyInteger('received_quantity')->nullable();
            $table->date('received_date')->nullable();
            $table->tinyInteger('return_quantity')->nullable();
            $table->string('vin', 20)->nullable();
            $table->date('date_in')->nullable();
            $table->date('target_date')->nullable();
            $table->unsignedSmallInteger('company_id');
            $table->unsignedSmallInteger('shop_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('extract_file_dump');
    }
};
