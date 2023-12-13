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
    }
}
