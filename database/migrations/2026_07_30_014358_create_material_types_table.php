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
        Schema::create('material_types', function (Blueprint $table) {
            $table->comment('Material Types Lookup Table');
            $table->smallIncrements('id');
            $table->string('material_type', 12)->unique('code');
            $table->string('description', 100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('material_types');
    }
};
