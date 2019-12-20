<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilmController extends Controller
{
    public function index()
    {
        $films = \DB::select('select * from films');
        return view('films.index', compact('films'));
    }
}
