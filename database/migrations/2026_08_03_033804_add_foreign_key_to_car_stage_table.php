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

        Schema::table('car_stage', function (Blueprint $table) {

            $table->foreign(['shop_id', 'sequence_number'])
                ->references(['shop_id', 'sequence_number'])
                ->on('stage_headings')
                ->onDelete('cascade');

            $table->index(['shop_id', 'sequence_number']); // creates an index for the foreign key columns

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

        Schema::table('car_stage', function (Blueprint $table) {

            $table->dropForeign(['shop_id', 'sequence_number']);
            $table->dropIndex(['shop_id', 'sequence_number']);

        });
    }
};
