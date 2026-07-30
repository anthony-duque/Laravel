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
        Schema::create('stage_headings', function (Blueprint $table) {
            $table->comment('Production Stage Headings for each location.');
            $table->mediumIncrements('id');
            $table->string('description', 50);
            $table->tinyInteger('sequence_number');
            $table->unsignedSmallInteger('shop_id')->comment('Location ID');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stage_headings');
    }
};
