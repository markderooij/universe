<?php

namespace App\Http\Controllers;
use App\Models\Planet;

use Illuminate\Http\Request;

class PlanetController extends Controller
{
    public function index()
    {
        $planets = Planet::with('solarSystem')->get();
        return view('planets.index', compact('planets'));
    }
}
