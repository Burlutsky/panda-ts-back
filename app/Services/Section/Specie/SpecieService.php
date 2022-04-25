<?php


namespace App\Services\Section\Specie;


use App\Models\Species;
use Illuminate\Http\Request;

class SpecieService
{
    public function store(Request $request, Species $specie): Species
    {
        $specie->fill($request->only($specie->getFillable()));
        $specie->save();

        return $specie;
    }

    public function getSpecies() {
        return Species::all();
    }
}
