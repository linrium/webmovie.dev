<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Auth;

use App\Movie;

class HomeController extends Controller
{
    public function index() {
        $movies = Movie::select('id', 'name', 'thumb')->limit(6)->orderBy('id', 'DESC')->get()->toArray();
        $moviesRandom = Movie::select('id', 'name', 'thumb')->orderByRaw("RAND()")->limit(6)->get()->toArray();
        $moviesMostViews = Movie::select('id', 'name', 'thumb', 'views')->limit(5)->orderBy('views', 'DESC')->get()->toArray();
        $moviesMostLikes = Movie::select('id', 'name', 'thumb', 'likes')->limit(5)->orderBy('likes', 'DESC')->get()->toArray();

        return view('home.main', compact('movies', 'moviesRandom', 'moviesMostViews', 'moviesMostLikes'));
    }
}
