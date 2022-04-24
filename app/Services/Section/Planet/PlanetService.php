<?php


namespace App\Services\Section\Planet;


use App\Models\Planets;

class PlanetService
{

    public function getPlanets(){
        return Planets::all();
    }
}
