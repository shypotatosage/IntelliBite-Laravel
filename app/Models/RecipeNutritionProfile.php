<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RecipeNutritionProfile extends Model
{
    use HasFactory;

    public function nutrition_profile(): BelongsTo
    {
        return $this->belongsTo(NutritionProfile::class);
    }
}
