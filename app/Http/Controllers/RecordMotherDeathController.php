<?php

namespace App\Http\Controllers;

use App\Models\MotherDeath;

use Illuminate\Http\Request;

class RecordMotherDeathController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */


    public function index()
    {
        $mother_death = MotherDeath::all();
        return view('motherDeathRequest', compact('mother_death')); //databasename
    }
}
