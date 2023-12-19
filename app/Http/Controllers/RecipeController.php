<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use App\Http\Requests\StoreRecipeRequest;
use App\Http\Requests\UpdateRecipeRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'ingredients' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 500,
                'message' => 'Failed to fetch recipes, there is an issue in your data.',
                'data' => ''
            ]);
        }

        $ingredients = explode(",", $request->ingredients);

        $query = Recipe::query();

        foreach ($ingredients as $tag) {
            $query->whereHas('recipe_ingredients', function ($q) use ($tag) {
                $q->where('ingredient_id', $tag);
            });
        }

        if ($request->has("nutrition_profiles")) {
            $nutrition_profiles = explode(",", $request->nutrition_profiles);

            foreach ($nutrition_profiles as $tag) {
                $query->whereHas('recipe_nutrition_profiles', function ($q) use ($tag) {
                    $q->where('nutrition_profile_id', $tag);
                });
            }
        }

        $result = $query->get();

        return response()->json([
            'status' => 200,
            'message' => 'success',
            'data' => $result
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRecipeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        if (!$id) {
            return response()->json([
                'status' => 500,
                'message' => 'Failed to fetch recipe, there is an issue in your data.',
                'data' => ''
            ]);
        }

        $result = Recipe::findOrFail($id);

        $result["ingredients"] = $result->ingredients();
        $result["nutrition_profiles"] = $result->nutrition_profiles();
        $result["steps"] = $result->steps;
        unset($result["recipe_ingredients"]);
        unset($result["recipe_nutrition_profiles"]);

        return response()->json([
            'status' => 200,
            'message' => 'success',
            'data' => $result
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Recipe $recipe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRecipeRequest $request, Recipe $recipe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Recipe $recipe)
    {
        //
    }
}