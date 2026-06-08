<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('point_details', function (Blueprint $table) {
            if (Schema::hasColumn('point_details', 'remaining_point')) {
                $table->dropColumn('remaining_point');
            }
        });
    }

    public function down(): void
    {
        Schema::table('point_details', function (Blueprint $table) {
            $table->integer('remaining_point')->nullable(); 
        });
    }
};