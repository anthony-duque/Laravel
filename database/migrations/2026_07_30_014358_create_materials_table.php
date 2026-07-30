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
        Schema::create('materials', function (Blueprint $table) {
            $table->comment('List of materials that technicians can order.');
            $table->smallIncrements('id');
            $table->string('part_number', 15)->unique('code');
            $table->string('description', 40)->nullable();
            $table->string('unit', 10)->nullable();
            $table->string('material_type', 12)->nullable()->index('type');
            $table->tinyInteger('reorder_quantity')->nullable();
            $table->string('brand', 30)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('materials');
    }
};
