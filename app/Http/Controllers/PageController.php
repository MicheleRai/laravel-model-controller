<?php

namespace App\Http\Controllers;

use App\Movie;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home() {
        return view('guest.home');
    }

    public function movies() {

        $movies = Movie::all();

        return view('guest.movies', compact('movies'));
    }
}
