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
            'description_steps' => 'zest',
            'unit' => 'tablespoon',
            'recipe_id' => 1,
            'ingredient_id' => 1,
        ]);

        RecipeIngredient::factory()->create([
            'quantity' => 3,
            'description' => '',
            'description_steps' => 'juice',
            'unit' => 'tablespoon',
            'recipe_id' => 1,
            'ingredient_id' => 1,
        ]);

        RecipeIngredient::factory()->create([
            'quantity' => 2,
            'description' => 'extra-virgin',
            'description_steps' => 'oil',
            'unit' => 'tablespoon',
            'recipe_id' => 1,
            'ingredient_id' => 2,
        ]);

        RecipeIngredient::factory()->create([
            'quantity' => 2,
            'description' => 'grated',
            'description_steps' => '',
            'unit' => 'teaspoons',
            'recipe_id' => 1,
            'ingredient_id' => 3,
        ]);

        RecipeIngredient::factory()->create([
            'quantity' => 1,
            'description' => 'freshly ground pink',
            'description_steps' => 'or 1/4 teaspoon ground black pepper, plus more for garnish',
            'unit' => 'teaspoons',
            'recipe_id' => 1,
            'ingredient_id' => 4,
        ]);

        RecipeIngredient::factory()->create([
            'quantity' => 1,
            'description' => '',
            'description_steps' => ', divided',
            'unit' => 'teaspoons',
            'recipe_id' => 1,
            'ingredient_id' => 5,
        ]);

        RecipeIngredient::factory()->create([
            'quantity' => 1,
            'description' => 'center-cut',
            'description_steps' => 'fillet, skinned and cut into 1-inch pieces',
            'unit' => 'pound',
            'recipe_id' => 1,
            'ingredient_id' => 6,
        ]);

        RecipeIngredient::factory()->create([
            'quantity' => 1,
            'description' => 'medium',
            'description_steps' => ', cut into 8 wedges (optional)',
            'unit' => '',
            'recipe_id' => 1,
            'ingredient_id' => 1,
        ]);

        RecipeIngredient::factory()->create([
            'quantity' => 1,
            'description' => 'chopped fresh flat-leaf',
            'description_steps' => '',
            'unit' => 'tablespoon',
            'recipe_id' => 1,
            'ingredient_id' => 7,
        ]);

        RecipeIngredient::factory()->create([
            'quantity' => 1,
            'description' => 'chopped fresh flat-leaf',
            'description_steps' => '',
            'unit' => 'bunch',
            'recipe_id' => 1,
            'ingredient_id' => 7,
        ]);

    }
}
