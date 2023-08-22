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
        Schema::table('cars', function (Blueprint $table) {
            $table->foreignId('color_id_in')->nullable()->constrained('colors')->restrictOnDelete('cascade');
            $table->foreignId('color_id_out')->nullable()->constrained('colors')->restrictOnDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('cars', function (Blueprint $table) {
            $table->dropColumn('color_id_in');
            $table->dropColumn('color_id_out');
        });
    }
};
