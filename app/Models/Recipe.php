<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'making_time',
        'servings',
        'calories_per_portion',
        'fats_per_portion',
        'carbs_per_portion',
        'proteins_per_portion',
    ];

    public function nutrition_profiles(){
        return $this->hasMany(RecipeNutritionProfile::class);
    }

    public function ingredients(){
        return $this->hasMany(RecipeIngredient::class);
    }

    public function steps(){
        return $this->hasMany(Step::class);
    }
}