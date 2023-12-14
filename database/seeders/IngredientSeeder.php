<?php

namespace Database\Seeders;

use App\Models\Ingredient;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Ingredient::factory()->create([
            'name' => 'lemon',
        ]);

        Ingredient::factory()->create([
            'name' => 'olive',
        ]);

        Ingredient::factory()->create([
            'name' => 'garlic',
        ]);

        Ingredient::factory()->create([
            'name' => 'peppercorns',
        ]);

        Ingredient::factory()->create([
            'name' => 'salt',
        ]);

        Ingredient::factory()->create([
            'name' => 'salmon',
        ]);

        Ingredient::factory()->create([
            'name' => 'parsley',
        ]);

    }
}
