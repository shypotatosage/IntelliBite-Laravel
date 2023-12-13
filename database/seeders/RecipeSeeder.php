<?php

namespace Database\Seeders;

use App\Models\Recipe;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RecipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Recipe::factory()->create([
            'name'  => 'Lemon-Garlic Salmon Bites',
            'making_time_in_minutes'  => 35,
            'servings'  => 8,
            'calories_per_portion'  => 152,
            'fats_per_portion'  => 7,
            'proteins_per_portion'  => 13,
            'carbs_per_portion'  => 12,
        ]);
    }
}
