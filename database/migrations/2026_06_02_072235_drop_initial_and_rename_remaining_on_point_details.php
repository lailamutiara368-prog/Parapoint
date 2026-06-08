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
        Schema::table('point_details', function (Blueprint $table) {
            if (Schema::hasColumn('point_details', 'initial_point')) {
                $table->dropColumn('initial_point');
            }

            // 2. Mengubah remaining_point lama menjadi counted_point biar sinkron
            if (Schema::hasColumn('point_details', 'remaining_point') && !Schema::hasColumn('point_details', 'counted_point')) {
                $table->renameColumn('remaining_point', 'counted_point');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('point_details', function (Blueprint $table) {
            if (Schema::hasColumn('point_details', 'counted_point')) {
                $table->renameColumn('counted_point', 'remaining_point');
            }
        });
    }
};
