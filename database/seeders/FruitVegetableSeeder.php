<?php

namespace Database\Seeders;

use App\Models\FruitVegetable;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FruitVegetableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        FruitVegetable::factory()->create([
            'name'  => 'Apple',
            'servings_in_grams'  => 182,
            'calories' => 95,
            'total_fat' => 0.3,
            'saturated_fat' => 0.1,
            'trans_fat' => 0,
            'polyunsaturated_fat' => 0.1,
            'monounsaturated_fat' => 0,
            'carbohydrate' => 25,
            'protein' => 0.5,
            'fiber' => 4.4,
            'sugar' => 19,
            'cholesterol' => 0,
            'sodium' => 1.8,
            'vitamind' => 0,
            'calcium' => 11,
            'iron' => 0.2,
            'potassium' => 194.7,
            'caffeine' => 0,
        ]);
    }
}
