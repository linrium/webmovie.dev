<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SeasonRequest;
use App\Season;

class SeasonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $seasons = Season::all();
        $statusCode = 200;
        $response = $seasons;

        if(!$seasons) {
            $response = [
                'error' => 'Season does not exist'
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
            $season = Season::create($request->all());
            $response = [
                "message" => "Season created succesfully",
                "data" => $season
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
        $season = Season::find($id);
        $statusCode = 200;
        $response = $season;

        if(!$season) {
            $response = [
                'error' => 'Season does not exist'
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
            $season = Season::find($id);
            $season->name = $request->name;
            $season->alias = $request->alias;
            $season->save();

            $response = [
                "message" => "Season updated succesfully"
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
        $checkId = Season::find($id);
        if(!$checkId) {
            $response = [
                "error" => "Season does not exits"
            ];
            $statusCode = 404;
        } else {
            Season::destroy($id);
            $response = [
                "message" => "Season deleted succesfully"
            ];
            $statusCode = 200;
        }
        
        return response($response, $statusCode)->header('Content-Type', 'application/json');
    }
}
