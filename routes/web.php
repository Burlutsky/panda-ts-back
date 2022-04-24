<?php

use App\Http\Controllers\Api\FilmController;
use App\Http\Controllers\Api\PeopleController;
use App\Http\Controllers\Api\PlanetController;
use App\Http\Controllers\Api\SpecieController;
use App\Http\Controllers\Api\StarshipController;
use App\Http\Controllers\Api\SWApiController;
use App\Http\Controllers\Api\VehicleController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', [SWApiController::class, 'index']);
//Route::get('/people', [PeopleController::class, 'index']);
//Route::get('/people/{id}', [PeopleController::class, 'show']);
//Route::get('/planets', [PlanetController::class, 'index']);
//Route::get('/films', [FilmController::class, 'index']);
//Route::get('/species', [SpecieController::class, 'index']);
//Route::get('/vehicles', [VehicleController::class, 'index']);
//Route::get('/starships', [StarshipController::class, 'index']);
