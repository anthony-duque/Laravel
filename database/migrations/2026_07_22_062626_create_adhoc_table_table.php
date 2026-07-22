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
        Schema::create('adhoc_table', function (Blueprint $table) {
            $table->comment('A special table that will hold values that does not belong to any of the other tables.');
            $table->increments('id');
            $table->string('name', 15);
            $table->string('value', 100)->nullable();
            $table->string('description', 50)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('adhoc_table');
    }
};
