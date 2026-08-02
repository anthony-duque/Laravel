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
        Schema::table('repairs', function(Blueprint $table){

            $table->unique(['shop_id', 'ro_number']);     // creates a unique index

        });

        Schema::table('parts_status', function (Blueprint $table) {

            $table->foreign(['shop_id', 'ro_number'])
                ->references(['shop_id', 'ro_number'])
                ->on('repairs')
                ->cascadeOnDelete();

            $table->index(['shop_id', 'ro_number']); // creates an index for the foreign key columnss
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('parts_status', function (Blueprint $table) {

            $table->dropForeign(['shop_id', 'ro_number']);

        });

        Schema::table('repairs', function(Blueprint $table){

            $table->dropUnique(['shop_id', 'ro_number']);     // creates a unique index

        });
    }
};
