<?php


namespace App\Services\Section\Vehicle;


use App\Models\Vehicles;
use Illuminate\Http\Request;

class VehicleService
{
    public function store(Request $request, Vehicles $vehicle): Vehicles
    {
        $vehicle->fill($request->only($vehicle->getFillable()));
        $vehicle->save();

        return $vehicle;
    }

    public function getVehicles() {
        return Vehicles::all();
    }
}
