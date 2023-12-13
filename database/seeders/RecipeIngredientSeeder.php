<?php

namespace Database\Seeders;

use App\Models\RecipeIngredient;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RecipeIngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        RecipeIngredient::factory()->create([
            'quantity' => 1,
            'description' => 'grated',
            'unit' => 'tablespoon',
            'recipe_id' => 1,
            'ingredient_id' => 1,
        ]);
    }
}
