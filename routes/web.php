<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SolarSystemController;
use App\Http\Controllers\PlanetController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/solar-systems', [SolarSystemController::class, 'index']);
//Route::get('/solar-systems/{solarSystem}', [SolarSystemController::class, 'show']);

Route::get('/planets', [PlanetController::class, 'index']);
//Route::get('/planets/{planet}', [PlanetController::class, 'show']);