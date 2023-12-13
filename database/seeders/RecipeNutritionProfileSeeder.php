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
    }
}
