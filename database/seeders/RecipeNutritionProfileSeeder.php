<?php

namespace Database\Seeders;

use App\Models\RecipeNutritionProfile;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RecipeNutritionProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        RecipeNutritionProfile::factory()->create([
            'recipe_id' => 1,
            'nutrition_profile_id' => 1
        ]);

        RecipeNutritionProfile::factory()->create([
            'recipe_id' => 1,
            'nutrition_profile_id' => 2
        ]);

        RecipeNutritionProfile::factory()->create([
            'recipe_id' => 1,
            'nutrition_profile_id' => 3
        ]);

        RecipeNutritionProfile::factory()->create([
            'recipe_id' => 1,
            'nutrition_profile_id' => 4
        ]);

        RecipeNutritionProfile::factory()->create([
            'recipe_id' => 1,
            'nutrition_profile_id' => 5
        ]);

        RecipeNutritionProfile::factory()->create([
            'recipe_id' => 1,
            'nutrition_profile_id' => 6
        ]);

        RecipeNutritionProfile::factory()->create([
            'recipe_id' => 1,
            'nutrition_profile_id' => 7
        ]);

        RecipeNutritionProfile::factory()->create([
            'recipe_id' => 1,
            'nutrition_profile_id' => 8
        ]);

        RecipeNutritionProfile::factory()->create([
            'recipe_id' => 1,
            'nutrition_profile_id' => 9
        ]);

        RecipeNutritionProfile::factory()->create([
            'recipe_id' => 2,
            'nutrition_profile_id' => 1
        ]);

        RecipeNutritionProfile::factory()->create([
            'recipe_id' => 2,
            'nutrition_profile_id' => 3
        ]);

        RecipeNutritionProfile::factory()->create([
            'recipe_id' => 2,
            'nutrition_profile_id' => 4
        ]);

        RecipeNutritionProfile::factory()->create([
            'recipe_id' => 2,
            'nutrition_profile_id' => 5
        ]);

        RecipeNutritionProfile::factory()->create([
            'recipe_id' => 2,
            'nutrition_profile_id' => 7
        ]);

        RecipeNutritionProfile::factory()->create([
            'recipe_id' => 2,
            'nutrition_profile_id' => 8
        ]);

        RecipeNutritionProfile::factory()->create([
            'recipe_id' => 2,
            'nutrition_profile_id' => 9
        ]);
    }
}
