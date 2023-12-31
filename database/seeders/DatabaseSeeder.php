<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call(RecipeSeeder::class);
        $this->call(IngredientSeeder::class);
        $this->call(NutritionProfileSeeder::class);
        $this->call(RecipeIngredientSeeder::class);
        $this->call(RecipeNutritionProfileSeeder::class);
        $this->call(StepSeeder::class);
        $this->call(FruitVegetableSeeder::class);
    }
}