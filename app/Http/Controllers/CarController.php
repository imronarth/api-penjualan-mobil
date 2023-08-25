<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\CarDetailResource;
use App\Http\Requests\CarRequest;
use App\Models\Car;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(CarRequest $request)
    {   
        $cars = Car::orderBy('id', 'DESC')->paginate('10');
        return response()->json([
            'status' => true,
            'message' => 'Data Ditemukan',
            'data' => $cars,
        ], 200);
        // return CarDetailResource::collection($cars);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(CarRequest $request)
    {
        $cars = Car::create($request->all());
        return response()->json([
            'status' => true,
            'message' => 'Data Disimpan',
            'data' => $cars,
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(CarRequest $request, string $id)
    {
        $car = Car::find($id);
        if (!$car) {
            return response()->json([
                'status' => false,
                'message' => 'Tidak Ditemukan',
            ], 404);
        }
        return response()->json([
            'status' => true,
            'message' => 'Data Ditemukan',
            'data' => $car,
        ], 201);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CarRequest $request, string $id)
    {
        $car = Car::find($id);
        if (!$car) {
            return response()->json([
                'status' => false,
                'message' => 'Tidak Ditemukan',
            ], 404);
        }
        $car->update($request->all());
        return response()->json([
            'status' => true,
            'message' => 'Berhasil Diubah',
            'data' => $car,
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $car = Car::find($id);
        if (!$car) {
            return response()->json([
                'status' => false,
                'message' => 'Tidak Ditemukan',
            ], 404);
        }
        $car->delete();
        return response()->json([
            'status' => true,
            'message' => 'Data Berhasil Dihapus',
        ], 200);
    }
}
