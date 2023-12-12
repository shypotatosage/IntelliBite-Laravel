<?php

use App\Models\NutritionProfile;
use App\Models\Recipe;
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
        Schema::create('recipe_nutrition_profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Recipe::class);
            $table->foreignIdFor(NutritionProfile::class);
            $table->timestamps();
            
            $table->foreign('recipe_id')->references('id')->on('recipes')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('nutrition_profile_id')->references('id')->on('nutrition_profiles')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recipe_nutrition_profiles');
    }
};