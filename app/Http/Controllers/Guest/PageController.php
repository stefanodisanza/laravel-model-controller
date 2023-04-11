<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function homepage()
    {
        $movies = Movie::all();
        return view('movies.index', ['movies' => $movies]);
    }
}
