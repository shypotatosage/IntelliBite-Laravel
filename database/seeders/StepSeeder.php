<?php

namespace Database\Seeders;

use App\Models\Step;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StepSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Step::factory()->create([
            'description' => 'Whisk lemon zest, lemon juice, oil, garlic, ground pepper and 3/4 teaspoon salt together in a medium nonreactive bowl until emulsified, about 30 seconds. Add salmon; toss until evenly coated. Let the salmon marinate, uncovered, at room temperature for 15 minutes.',
            'recipe_id' => 1,
        ]);
}
