<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::resource('', 'Api\SectionController');
Route::resource('people', 'Api\PeopleController');
Route::resource('planets', 'Api\PlanetController');
Route::resource('films', 'Api\FilmController');
Route::resource('species', 'Api\SpecieController');
Route::resource('vehicles', 'Api\VehicleController');
Route::resource('starships', 'Api\StarshipController');
