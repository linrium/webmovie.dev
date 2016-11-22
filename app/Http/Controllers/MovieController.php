<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests\MovieRequest;
use App\Movie;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $movies = Movie::all();
        // $statusCode = 200;
        // $response = $movies;

        // if(!$movies) {
        //     $response = [
        //         'error' => 'Movie does not exist'
        //     ];
        //     $statusCode = 404;
        // }
        // return response($response, $statusCode)->header('Content-Type','application/json');

        $movie = DB::table('movies')->join('years','movies.year_id','=','years.id')->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $movie = Movie::create($request->all());
        $response = [
            "message" => "Movie created succesfully",
            "data" => $movie
        ];
        $statusCode = 201;
        

        return response($response, $statusCode)->header('Content-Type','application/json');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $movie = DB::table('movies')->join('years',"movies.year_id",'=',"years.id")->get();

        return response($movie, 200)->header('Content-Type','application/json');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
