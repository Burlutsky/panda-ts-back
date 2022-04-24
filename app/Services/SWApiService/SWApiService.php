<?php


namespace App\Services\SWApiService;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Schema;


use App\Models\Section;

class SWApiService
{

    public function getItems() {
        if (!Schema::hasTable('sections')) {
            $this->createTables();
        }
        return Section::all();
    }

    protected function createTables() {
        Schema::create('sections', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('url');
            $table->timestamps();
        });
        $response = Http::get(env('API_URL'))->json();
        $sections = array();
        foreach ($response as $key => $value) {
            array_push($sections,
                [
                    'title' => ucfirst($key),
                    'url' => $key
                ]
            );
            if (!Schema::hasTable($key)) {
                $this->createTable(''.$key);
                $this->fillTable(''.$key);
            }
        }
        DB::table('sections')->insert($sections);
    }

    protected function fillTable(string $tableName) {
        $response = Http::get(env('API_URL') . $tableName)->json();
        $result = $this->prepareData($response['results']);

        while ($response['next']) {
            $response = Http::get($response['next'])->json();
            $result = array_merge(
                $result,
                $this->prepareData($response['results'])
            );
        }

        DB::table($tableName)->insert($result);
    }

    protected function prepareData ($arr): array
    {
        $result = array();
        foreach ($arr as $data) {
            array_push(
                $result,
                array_map(
                    function ($value) {
                        switch (gettype($value)) {
                            case 'array':
                                return json_encode($value);
                            case 'string':
                                return str_replace("https:\/\/swapi.dev\/api\/", '', $value);
                            default:
                                return $value;
                        }
                    },
                    $data
                )
            );
        }
        return $result;
    }

    protected function createTable(string $tableName) {
        Schema::create($tableName, function (Blueprint $table) use ($tableName) {
            $table->id();
            $response = Http::get(env('API_URL') . $tableName)->json();
            foreach ($response['results'][0] as $key => $value) {
                switch (gettype($value)) {
                    case 'string':
                        if (mb_strlen($value) > 250) {
                            $table->longText($key);
                        } else {
                            $table->string($key)->nullable();
                        }
                        break;
                    case 'array':
                        $table->json($key);
                        break;
                    default:
                        $table->integer($key);
                        break;
                }
            }
            $table->timestamps();
        });
    }
}
