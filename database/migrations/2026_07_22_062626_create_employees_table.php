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
        Schema::create('employees', function (Blueprint $table) {
            $table->comment('List of Shop Staff with their name, cell number and departments.');
            $table->tinyIncrements('id');
            $table->string('user_name', 15);
            $table->string('first_name', 15)->nullable();
            $table->string('last_name', 20)->nullable();
            $table->bigInteger('cell_number')->nullable();
            $table->string('cell_service', 20)->nullable();
            $table->char('dept_code', 12)->nullable();
            $table->string('email', 50)->nullable();
            $table->boolean('notify')->nullable()->default(true);
            $table->string('notif_preference', 10)->nullable();
            $table->unsignedTinyInteger('loc_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
