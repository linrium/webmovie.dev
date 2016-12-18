<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Movie;
use App\Episode;
use App\Genres;

class PageController extends Controller
{
    public function mapArray($option, $data) {
        $str = '';
        foreach($data as $d) {
            if($str === '')
                $str = "<span><a href='/".$option."/".$d['name']."'>".$d['name']."</a></span>";
            else
                $str .= ", <span><a href='/".$option."/".$d['name']."'>".$d['name']."</a></span>";
        }

        return $str;
    }

    public function index($id, $episodeId) {
        $movie = Movie::find($id)->toArray();
        $movies = Movie::select('id', 'name', 'thumb', 'views')->orderByRaw("RAND()")->limit(10)->orderBy('id', 'DESC')->get()->toArray();

        $episodes = Episode::where('movie_id', $id)->select('id', 'name', 'views', 'likes')->limit(10)->get()->toArray();
        $episode = Episode::find($episodeId)->toArray();

        // // get data
        $genres = Movie::find($id)->genre()->get()->toArray();
        $producers = Movie::find($id)->producer()->get()->toArray();
        $links = Episode::find($episodeId)->link()->get()->toArray();

        // // convert data to array;
        $arrGenres = $this->mapArray('genre', $genres);
        $arrProducers = $this->mapArray('producer', $producers);

        return view('home.page', compact('links', 'movie', 'movies', 'episodes', 'episode', 'arrGenres', 'arrProducers', 'episodeId'));
        // echo '<pre>';
        // print_r($episode['views']);
    }
}
