<?php

namespace App\Http\Controllers;

use App\Models\car;
use App\Http\Requests\carRequest;
use Illuminate\Http\Request;

class carController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return car::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(carRequest $request)
    {
        $car = Car::create($request->all());
        return response()->json([
            'message' => 'Carro creado',
            'car' => $car
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        $car = Car::with('category')->findOrFail($id);
        return response()->json($car,200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(carRequest $request, string $id)
    {
        $car = Car::find($id);
        $car->update($request->validated());
        return response()->json([
            'message' => 'Carro actualizado',
            'car' => $car
        ]);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $car = Car::find($id);
        $car->delete();
        return response()->json([
            'message' => 'Carro eliminado'
        ]);
    }
}
