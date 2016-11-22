<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FansubRequest;
use App\Fansub;

class FansubController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fansubs = Fansub::all();
        $statusCode = 200;
        $response = $fansubs;

        if(!$fansubs) {
            $response = [
                'error' => 'Fansub does not exist'
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
            $fansub = Fansub::create($request->all());
            $response = [
                "message" => "Fansub created succesfully",
                "data" => $fansub
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
        $fansub = Fansub::find($id);
        $statusCode = 200;
        $response = $fansub;

        if(!$fansub) {
            $response = [
                'error' => 'Fansub does not exist'
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
            $fansub = Fansub::find($id);
            $fansub->name = $request->name;
            $fansub->alias = $request->alias;
            $fansub->save();

            $response = [
                "message" => "Fansub updated succesfully"
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
        $checkId = Fansub::find($id);
        if(!$checkId) {
            $response = [
                "error" => "Fansub does not exits"
            ];
            $statusCode = 404;
        } else {
            Fansub::destroy($id);
            $response = [
                "message" => "Fansub deleted succesfully"
            ];
            $statusCode = 200;
        }
        
        return response($response, $statusCode)->header('Content-Type', 'application/json');
    }
}
