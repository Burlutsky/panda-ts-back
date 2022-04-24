<?php


namespace App\Services\Section\Specie;


use App\Models\Species;

class SpecieService
{

    public function getSpecies() {
        return Species::all();
    }
}
