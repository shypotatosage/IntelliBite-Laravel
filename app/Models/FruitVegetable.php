<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FruitVegetable extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'servings_in_grams',
        'calories',
        'total_fat',
        'saturated_fat',
        'trans_fat',
        'polyunsaturated_fat',
        'monounsaturated_fat',
        'carbohydrate',
        'protein',
        'fiber',
        'sugar',
        'cholesterol',
        'sodium',
        'vitamind',
        'calcium',
        'iron',
        'potassium',
        'caffeine',
    ];
}