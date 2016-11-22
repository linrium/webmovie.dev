<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\GenreRequest;
use App\Genre;

class GenreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $genres = Genre::all();
        $statusCode = 200;
        $response = $genres;

        if(!$genres) {
            $response = [
                'error' => 'Genre does not exist'
            ];
            $statusCode = 404;
        }
        return response($response, $statusCode)->header('Content-Type','application/json');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(!$request->name or !$request->alias) {
            $response = [
                "error" => "Please provide name and alias"
            ];
            $statusCode = 422;
        } else {
            $genre = Genre::create($request->all());
            $response = [
                "message" => "Genre created succesfully",
                "data" => $genre
            ];
            $statusCode = 201;
        }
        

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
        $genre = Genre::find($id);
        $statusCode = 200;
        $response = $genre;

        if(!$genre) {
            $response = [
                'error' => 'Genre does not exist'
            ];
            $statusCode = 404;
        }
        return response($response, $statusCode)->header('Content-Type','application/json');
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
        if(!$request->name or !$request->alias) {
            $response = [
                "error" => "Please provide name and alias"
            ];
            $statusCode = 422;
        } else {
            $genre = Genre::find($id);
            $genre->name = $request->name;
            $genre->alias = $request->alias;
            $genre->save();

            $response = [
                "message" => "Genre updated succesfully"
            ];
            $statusCode = 422;
        }

        return response($response, $statusCode)->header('Content-Type','application/json');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $checkId = Genre::find($id);
        if(!$checkId) {
            $response = [
                "error" => "Genre does not exits"
            ];
            $statusCode = 404;
        } else {
            Genre::destroy($id);
            $response = [
                "message" => "Genre deleted succesfully"
            ];
            $statusCode = 200;
        }
        
        return response($response, $statusCode)->header('Content-Type', 'application/json');
    }
}
