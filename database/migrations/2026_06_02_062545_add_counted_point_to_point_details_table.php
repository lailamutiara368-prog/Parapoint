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
            $table->integer('counted_point')->after('category_id')->nullable(); 
    
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('point_details', function (Blueprint $table) {
            $table->dropColumn('counted_point');
        });
    }
};
