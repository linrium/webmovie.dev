<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests\MovieRequest;
use App\Movie;
use App\Year;
use App\Season;
use App\Producer;
use App\Genre;
use App\Keyword;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Movie::select('id', 'name', 'alias', 'status', 'thumb', 'views', 'total_episodes', 'description', 'year_id', 'season_id')
        ->orderBy('id', 'DESC')
        ->get()
        ->toArray();

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
        $producers = Producer::all();

        return view('admin.movie.create', compact('years', 'seasons', 'producers', 'genres', 'keywords'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // movie request
        $fileName = $request->file('fileThumb')->getClientOriginalName();

        $movie = new Movie();
        $movie->name = $request->txtName;
        $movie->alias = changeTitle($request->txtName);
        $movie->status =$request->txtStatus;
        $movie->thumb = $fileName;
        $movie->views = 0;
        $movie->total_episodes = 1;
        $movie->description = $request->txtDescription;
        $movie->year_id = 1;
        $movie->season_id = 1;
        $movie->save();
        // save file
        $request->file('fileThumb')->move('public/upload/', $fileName);
        // producer request
        $insertId = $movie->id;
        $movie->producer()->attach($request->txtProducer);
        $movie->genre()->attach($request->txtGenre);
        $movie->keyword()->attach(explode(',', $request->txtKeyword));
        
        return redirect()->route('movie.index')->with([
            'flash_level'=>'success',
            'flash_message'=>'Movie created succesfully'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $movie = Movie::find($id)->toArray();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $movie = Movie::find($id)->toArray();

        return view('admin.movie.edit', compact('movie'));
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
        $movie = Movie::find($id);
        $movie->name = $request->txtName;
        $movie->alias = changeTitle($request->txtName);
        $movie->save();

        return redirect()->route('movie.index')->with([
            'flash_level'=>'success',
            'flash_message'=>'Movie updated succesfully'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $movie = Movie::destroy($id);

        return redirect()->route('movie.index')->with([
            'flash_level'=>'success',
            'flash_message'=>'Movie deleted succesfully'
        ]);
    }
}
