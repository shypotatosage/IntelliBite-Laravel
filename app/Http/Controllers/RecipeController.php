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

        $recipes = DB::table("recipes as r")
            ->leftjoin('recipe_ingredients as i', 'i.recipe_id', '=', 'r.id')
            ->leftjoin('recipe_nutrition_profiles as n', 'n.recipe_id', '=', 'r.id');

        foreach ($request->ingredients as $ingredient) {
            $recipes->where('ingredient_id', '=', $ingredient);
        }

        if ($request->has("nutrition_profiles")) {
            foreach ($request->nutrition_profiles as $nutrition_profile) {
                $recipes->where('nutrition_profile_id', '=', $nutrition_profile);
            }
        }

        $result = $recipes->get();

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
