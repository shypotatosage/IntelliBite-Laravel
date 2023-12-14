<?php

use App\Http\Controllers\IngredientController;
use App\Http\Controllers\NutritionProfileController;
use App\Http\Controllers\RecipeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/get-recipes', [RecipeController::class, 'show']);
Route::get('/get-ingredients', [IngredientController::class, 'index']);
Route::get('/get-nutrition-profiles', [NutritionProfileController::class, 'index']);
