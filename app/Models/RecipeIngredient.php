<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RecipeIngredient extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'quantity',
        'unit',
        'description',
    ];

    public function recipe() : BelongsTo
    {
        return $this->belongsTo(Recipe::class);
    }

    public function ingredient() : BelongsTo
    {
        return $this->belongsTo(Ingredient::class);
    }
}