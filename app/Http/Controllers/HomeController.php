<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\Game;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Team::with('game')->get();
        /* dd($teams); */
        return view('index', ['teams' => $teams]);
    }


}
