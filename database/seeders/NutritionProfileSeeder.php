<?php

namespace Database\Seeders;

use App\Models\NutritionProfile;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NutritionProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        NutritionProfile::factory()->create([
            'name' => 'Sesame-Free',
        ]);

        NutritionProfile::factory()->create([
            'name' => 'Diabetes-Appropriate',
        ]);

        NutritionProfile::factory()->create([
            'name' => 'Nut-Free',
        ]);

        NutritionProfile::factory()->create([
            'name' => 'Dairy-Free',
        ]);

        NutritionProfile::factory()->create([
            'name' => 'Soy-Free',
        ]);

        NutritionProfile::factory()->create([
            'name' => 'Heart-Healthy',
        ]);

        NutritionProfile::factory()->create([
            'name' => 'High-Protein',
        ]);

        NutritionProfile::factory()->create([
            'name' => 'Egg-Free',
        ]);

        NutritionProfile::factory()->create([
            'name' => 'Gluten-Free',
        ]);
    }
}
