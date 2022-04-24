<?php


namespace App\Services\Section\People;


use App\Models\People;
use Illuminate\Http\Request;

class PeopleService
{

    public function store(Request $request, People $person): People
    {
        $person->fill($request->only($person->getFillable()));
        $person->save();

        return $person;
    }

    public function getPeople() {
        return People::all();
    }
}
