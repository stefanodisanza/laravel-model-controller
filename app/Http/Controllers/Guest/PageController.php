<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $movies = Movie::all();

        return view('movies')->with('movies', $movies);
        // oppure
        // return view('movies', compact('movies'));
    }
}
