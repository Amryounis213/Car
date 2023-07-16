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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            //realtion 
            $table->foreignId('car_model_id')->constrained('car_models')->onDelete('cascade');
            $table->foreignId('brand_id')->constrained('brands')->restrictOnDelete('cascade');
            $table->foreignId('car_type_id')->constrained('car_types')->onDelete('cascade');
            $table->foreignId('generation_id')->constrained('generations')->onDelete('cascade');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('color_id_in')->nullable()->constrained('colors')->restrictOnDelete('cascade');
            $table->foreignId('color_id_out')->nullable()->constrained('colors')->restrictOnDelete('cascade');
            //car info
            $table->string('name')->unique();
            $table->string('origin')->nullable();
            //release date , techenical control , first hand , number of owners , meter , gearbox , color , number or doors , number or places , length  
            $table->integer('min_km')->nullable();
            $table->integer('max_km')->nullable();
            $table->year('year')->nullable();
            $table->integer('mileage')->nullable();
            $table->decimal('price', 8, 2)->nullable();
            $table->text('description')->nullable();
            $table->enum('gearbox', ['manual', 'automatic'])->default('manual');
            $table->enum('fuel', ['diesel', 'essence', 'electric'])->default('essence');
            $table->integer('number_of_doors')->nullable();
            $table->integer('number_of_places')->nullable();
            $table->integer('number_of_owners')->nullable();
            $table->integer('seats')->nullable();
            $table->integer('length')->nullable();
            $table->string('main_image')->nullable();
            $table->json('images')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
