<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Movie;
use App\Genre;
use App\Keyword;
use App\Season;
use App\Year;
use App\Producer;
use App\Fansub;

class SearchController extends Controller
{
    public function show(Request $request) {
        $keyword = $request->q;
        $movies = Movie::where('name', 'LIKE', "%$keyword%")->get()->toArray();
        $genres = Genre::where('name', 'LIKE', "%$keyword%")->get()->toArray();

        return view('home.search.show', compact('movies','genres','keyword'));
    }
}
