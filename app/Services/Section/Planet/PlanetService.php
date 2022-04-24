<?php


namespace App\Services\Section\Planet;


use App\Models\Planets;
use Illuminate\Http\Request;

class PlanetService
{
    public function store(Request $request, Planets $planet): Planets
    {
        $planet->fill($request->only($planet->getFillable()));
        $planet->save();

        return $planet;
    }

    public function getPlanets(){
        return Planets::all();
    }
}
