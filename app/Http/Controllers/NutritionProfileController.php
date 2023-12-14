<?php

namespace App\Http\Controllers;

use App\Models\NutritionProfile;
use App\Http\Requests\StoreNutritionProfileRequest;
use App\Http\Requests\UpdateNutritionProfileRequest;

class NutritionProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'status' => 200,
            'message' => 'success',
            'data' => NutritionProfile::all()
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
    public function store(StoreNutritionProfileRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(NutritionProfile $nutritionProfile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(NutritionProfile $nutritionProfile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateNutritionProfileRequest $request, NutritionProfile $nutritionProfile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(NutritionProfile $nutritionProfile)
    {
        //
    }
}