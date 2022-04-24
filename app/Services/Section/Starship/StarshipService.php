<?php


namespace App\Services\Section\Starship;


use App\Models\Starships;

class StarshipService
{

    public function getStarships() {
        return Starships::all();
    }
}
