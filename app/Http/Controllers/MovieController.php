<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Http\Requests\MovieRequest;
use App\Movie;
use App\Year;
use App\Season;
use App\Producer;
use App\Genre;
use App\Keyword;
use App\Fansub;
use App\EpisodeSeason;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Movie::select('id', 'name', 'alias', 'status', 'thumb', 'views', 'likes', 'current_episodes', 'total_episodes', 'description', 'year_id', 'season_id')
        ->orderBy('id', 'DESC')
        ->paginate(5);

        return view('admin.movie.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $years = Year::all();
        $seasons = Season::all();
        $genres = Genre::all();
        $keywords = Keyword::all();
        $fansubs = Fansub::all();
        $producers = Producer::all();

        return view('admin.movie.create', compact('years', 'seasons', 'producers', 'genres', 'fansubs','keywords'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MovieRequest $request)
    {
        //movie request
        $fileOriginalName = $request->file('fileThumb');
        if($fileOriginalName !== null) {
            $fileName = $request->file('fileThumb')->getClientOriginalName();
             // save file
            $fileOriginalName->move('public/upload/', $fileName);
        }

        $movie                   = new Movie();
        $movie->name             = $request->txtName;
        $movie->alias            = changeTitle($request->txtName);
        $movie->status           = $request->txtStatus;
        $movie->views            = 0;
        $movie->likes            = 0;
        $movie->current_episodes = 0;
        $movie->total_episodes   = $request->txtNumber;
        $movie->description      = $request->txtDescription;
        $movie->year_id          = $request->txtYear;
        $movie->season_id        = $request->txtSeason;

        if($fileOriginalName === null) {
            $movie->thumb = $movie->thumb;
        } else {
            $movie->thumb = $fileName;
        }

        $movie->save();

        // save file
        $request->file('fileThumb')->move('public/upload/', $fileName);
        // producer request
        $movie->producer()->attach($request->txtProducer);
        // genre request
        $movie->genre()->attach($request->txtGenre);
        // fansub request
        $movie->fansub()->attach($request->txtFansub);
        // keyword request
        // $movie->keyword()->attach(explode(',', $request->txtKeyword));
        $movie->keyword()->attach($request->txtKeyword);
        
        return redirect()->route('movie.index')->with([
            'flash_level'=>'success',
            'flash_message'=>'Movie created succesfully'
        ]);
        // echo($request->txtKeyword);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return redirect()->route('episode.index', $id);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $movie     = Movie::find($id);
        $years     = Year::all();
        $seasons   = Season::all();
        $genres    = Genre::all();
        $keywords  = Keyword::all();
        $fansubs   = Fansub::all();
        $producers = Producer::all();

        $producer_movies = Movie::find($id)->producer()->get()->toArray();
        $genre_movies    = Movie::find($id)->genre()->get()->toArray();
        $fansub_movies   = Movie::find($id)->fansub()->get()->toArray();

        // convert array name to string
        $movie_keywords  = Movie::find($id)->keyword()->get()->toArray();

        return view('admin.movie.edit', compact('movie_keywords','producer_movies', 'genre_movies', 'fansub_movies', 'arr_keywords','movie', 'years', 'seasons', 'producers', 'genres', 'fansubs','keywords'));
        // echo '<pre>';
        // print_r(implode(',',$arr));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MovieRequest $request, $id)
    {
        //movie request
        $fileOriginalName = $request->file('fileThumb');
        if($fileOriginalName !== null) {
            $fileName = $request->file('fileThumb')->getClientOriginalName();
             // save file
            $fileOriginalName->move('public/upload/', $fileName);
        }
        
        $movie                   = Movie:: find($id);
        $movie->name             = $request->txtName;
        $movie->alias            = changeTitle($request->txtName);
        $movie->status           = $request->txtStatus;
        $movie->views            = $movie->views;
        $movie->likes            = $movie->likes;
        $movie->current_episodes = $movie->current_episodes;
        $movie->total_episodes   = $request->txtNumber;
        $movie->description      = $request->txtDescription;
        $movie->year_id          = $request->txtYear;
        $movie->season_id        = $request->txtSeason;

        if($fileOriginalName === null) {
            $movie->thumb = $movie->thumb;
        } else {
            $movie->thumb = $fileName;
        }

        $movie->save();

        // producer request
        $movie->producer()->sync($request->txtProducer);
        // genre request
        $movie->genre()->sync($request->txtGenre);
        // fansub request
        $movie->fansub()->sync($request->txtFansub);
        // keyword request
        $movie->keyword()->sync($request->txtKeyword);
        
        return redirect()->route('movie.index')->with([
            'flash_level'=>'success',
            'flash_message'=>'Movie updated succesfully'
        ]);
        // echo '<pre>';
        // print_r(explode(',', $request->txtKeyword));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //TODO: cannt delete image without delete movie
        $thumb_name = Movie::select('thumb')->find($id)->toArray();
        File::delete('/public/upload/'.$thumb_name['thumb']);
        $movie = Movie::destroy($id);

        return redirect()->route('movie.index')->with([
            'flash_level'=>'success',
            'flash_message'=>'Movie deleted succesfully'
        ]);
    }
}
