<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AddSections extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('sections')->insert([
            [

                'title' => "People",
                'url' => "https://swapi.dev/api/people"
            ],
            [

                'title' => "Planets",
                'url' => "https://swapi.dev/api/planets"
            ],
            [

                'title' => "Films",
                'url' => "https://swapi.dev/api/films"
            ],
            [

                'title' => "Species",
                'url' => "https://swapi.dev/api/species"
            ],
            [

                'title' => "Vehicles",
                'url' => "https://swapi.dev/api/vehicles"
            ],
            [

                'title' => "Starships",
                'url' => "https://swapi.dev/api/starships"
            ],
        ]);
    }
}
