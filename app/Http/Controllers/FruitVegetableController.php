<?php

namespace App\Http\Controllers;

use App\Models\FruitVegetable;
use App\Http\Requests\StoreFruitVegetableRequest;
use App\Http\Requests\UpdateFruitVegetableRequest;

class FruitVegetableController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(StoreFruitVegetableRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($name)
    {
        if (!$name) {
            return response()->json([
                'status' => 500,
                'message' => 'Failed to fetch fruit/vegetables information, there is an issue in your data.',
                'data' => ''
            ]);
        }

        $result = FruitVegetable::where("name", "=", $name)->first();

        return response()->json([
            'status' => 200,
            'message' => 'success',
            'data' => $result
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FruitVegetable $fruitVegetable)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFruitVegetableRequest $request, FruitVegetable $fruitVegetable)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FruitVegetable $fruitVegetable)
    {
        //
    }
}