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
        Schema::create('cell_email_lookups', function (Blueprint $table) {
            $table->comment('A lookup table that lists the equivalent email address of a cell service.');
            $table->increments('id');
            $table->string('cell_name', 12);
            $table->string('email_format', 60);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cell_email_lookups');
    }
};
