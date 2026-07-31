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
        Schema::table('extract_file_dump', function (Blueprint $table) {

            $table->foreign('shop_id')
                    ->nullable()
                    ->references('id')
                    ->on('shops')
                    ->onDelete('set null');     // set foreign key to null
                                                // if foreign key could not be determined
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('extract_file_dump', function (Blueprint $table) {

            $table->dropForeign('shop_id');
        });
    }
};
