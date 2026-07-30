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
        Schema::create('shops', function (Blueprint $table) {
            $table->comment('Location ID for each shop.');
            $table->smallIncrements('id');
            $table->string('name', 60)->nullable();
            $table->dateTime('last_data_upload')->nullable()->comment('Date and time of the last time data was uploaded from CCC One.');
            $table->unsignedSmallInteger('company_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shops');
    }
};
