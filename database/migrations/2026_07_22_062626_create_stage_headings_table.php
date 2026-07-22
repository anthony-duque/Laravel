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
            $table->smallIncrements('id');
            $table->string('description', 50);
            $table->tinyInteger('order_no');
            $table->unsignedTinyInteger('loc_id')->comment('Location ID');
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
