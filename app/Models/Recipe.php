<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'making_time_in_minutes',
        'servings',
        'calories_per_portion',
        'fats_per_portion',
        'carbs_per_portion',
        'proteins_per_portion',
    ];

    public function recipe_nutrition_profiles()
    {
        return $this->hasMany(RecipeNutritionProfile::class);
    }

    public function nutrition_profiles()
    {
        $nutrition_profiles = [];

        foreach ($this->recipe_nutrition_profiles as $nutrition_profile) {
            $temp = $nutrition_profile->nutrition_profile;
            array_push($nutrition_profiles, $temp);
        }

        return $nutrition_profiles;
    }

    public function recipe_ingredients()
    {
        return $this->hasMany(RecipeIngredient::class);
    }

    public function ingredients()
    {
        $ingredients = [];

        foreach ($this->recipe_ingredients as $ingredient) {
            $temp = $ingredient->ingredient;
            array_push($ingredients, $temp);
        }

        return $ingredients;
    }

    public function steps()
    {
        return $this->hasMany(Step::class);
    }
}
