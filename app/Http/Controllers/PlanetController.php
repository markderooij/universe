<?php

namespace App\Http\Controllers;
use App\Models\Planet;

use Illuminate\Http\Request;

class PlanetController extends Controller
{
    public function index()
    {
        $planets = Planet::with('solarSystem')->get();
        //dd($planets);
        return view('planets.index', compact('planets'));
    }
}
