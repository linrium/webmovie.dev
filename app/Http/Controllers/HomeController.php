<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Auth;

use App\Movie;
use App\Episode;

class HomeController extends Controller
{
    public function index() {
        $movies = Movie::select('id', 'name', 'thumb', 'current_episodes', 'total_episodes')->limit(6)->orderBy('id', 'DESC')->get()->toArray();
        $moviesRandom = Movie::select('id', 'name', 'thumb', 'current_episodes', 'total_episodes')->orderByRaw("RAND()")->limit(6)->get()->toArray();
        $moviesMostViews = Movie::select('id', 'name', 'thumb', 'current_episodes', 'views')->limit(5)->orderBy('views', 'DESC')->get()->toArray();
        $moviesMostLikes = Movie::select('id', 'name', 'thumb', 'current_episodes', 'likes')->limit(5)->orderBy('likes', 'DESC')->get()->toArray();
        $newEpisodes = Episode::select('id', 'name', 'alias', 'movie_id')->limit(6)->orderBy('id', 'DESC')->get()->toArray();

        return view('home.main', compact('movies', 'moviesRandom', 'moviesMostViews', 'moviesMostLikes', 'newEpisodes'));
    }
}
