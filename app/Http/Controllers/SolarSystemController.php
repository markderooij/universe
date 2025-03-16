<?php

namespace App\Http\Controllers;
use App\Models\SolarSystem;

use Illuminate\Http\Request;

class SolarSystemController extends Controller
{
    public function index()
    {
        $solarSystems = SolarSystem::with('planets')->get();
        dd(solarSystems);
        return view('solar_systems.index', compact('solarSystems'));
    }
}
