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
        Schema::create('fruit_vegetables', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->integer('servings_in_grams');
            $table->integer('calories');
            $table->double('total_fat');
            $table->double('saturated_fat');
            $table->double('trans_fat');
            $table->double('polyunsaturated_fat');
            $table->double('monounsaturated_fat');
            $table->double('carbohydrate');
            $table->double('protein');
            $table->double('fiber');
            $table->double('sugar');
            $table->double('cholesterol');
            $table->double('sodium');
            $table->double('vitamind');
            $table->double('calcium');
            $table->double('iron');
            $table->double('potassium');
            $table->double('caffeine');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fruit_vegetables');
    }
};