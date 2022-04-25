<?php


namespace App\Services\Section\Starship;


use App\Models\Starships;
use Illuminate\Http\Request;

class StarshipService
{
    public function store(Request $request, Starships $starship): Starships
    {
        $starship->fill($request->only($starship->getFillable()));
        $starship->save();

        return $starship;
    }

    public function getStarships() {
        return Starships::all();
    }
}
