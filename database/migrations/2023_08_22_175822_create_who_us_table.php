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
        Schema::create('who_us', function (Blueprint $table) {
            $table->id();
            // $table->string('icon');
            // $table->json('upper_text');
            // $table->string('image');
            $table->json('text')->nullable();
            // $table->json('lower_text');
            // $table->string('link_text');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('who_us');
    }
};
