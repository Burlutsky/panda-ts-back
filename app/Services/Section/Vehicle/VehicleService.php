<?php


namespace App\Services\Section\Vehicle;


use App\Models\Vehicles;

class VehicleService
{

    public function getVehicles() {
        return Vehicles::all();
    }
}
