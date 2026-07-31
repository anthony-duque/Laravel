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
        Schema::table('materials', function (Blueprint $table) {

            $table->dropForeign('materials_ibfk_1');

            $table->dropColumn('material_type');

            $table->foreign('material_type_id')
                    ->references('id')
                    ->on('material_types')
                    ->cascadeOnDelete();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('materials', function (Blueprint $table) {

            $table-string('material_type');

            $table->dropForeign('materials_material_type_id_foreign');
        });
    }
};
