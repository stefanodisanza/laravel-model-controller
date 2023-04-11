<?php

use Illuminate\Support\Facades\Route;
use App\Models\Movie;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $movies = Movie::all(); // qui definisci la variabile $movies
    return view('movies.index')->with('movies', $movies); // qui passi la variabile alla vista
});
