<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Genre;

class GenrePageController extends Controller
{
    public function index() {
        $genres = Genre::orderBy('name', 'ASC')->get()->toArray();

        return view('home.genre.index', compact('genres'));
    }
}
