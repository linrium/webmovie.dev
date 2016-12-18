<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Genre;
use App\Movie;

class GenrePageController extends Controller
{
    public function index() {
        $genres = Genre::orderBy('name', 'ASC')->get()->toArray();

        return view('home.genre.index', compact('genres'));
    }

    public function show($id) {
        $genre = Genre::select('name')->find($id)->toArray();
        $movies = Genre::find($id)->movie()->get()->toArray();

        return view('home.genre.show', compact('movies', 'genre'));
        // echo '<pre>';
        // print_r($genre);
    }
}
