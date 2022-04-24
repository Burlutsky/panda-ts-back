<?php


namespace App\Services\Section\Film;


use App\Models\Films;
use Illuminate\Http\Request;

class FilmService
{
    public function store(Request $request, Films $film): Films
    {
        $film->fill($request->only($film->getFillable()));
        $film->save();

        return $film;
    }

    public function getFilms() {
        return Films::all();
    }
}
