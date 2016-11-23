<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests\MovieRequest;
use App\Movie;
use App\Year;
use App\Season;
use App\Producer;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Movie::select('id', 'name', 'alias', 'status', 'thumb', 'views', 'total_episodes', 'description', 'year_id', 'season_id', 'producer_id')
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
        $producers = Producer::all();

        return view('admin.movie.create', compact('years', 'seasons', 'producers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MovieRequest $request)
    {
        $movie = new Movie();
        $movie->name = $request->txtName;
        $movie->alias = changeTitle($request->txtName);
        $movie->save();

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
