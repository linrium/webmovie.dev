<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProducerRequest;
use App\Producer;

class ProducerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $producers = Producer::all();
        $statusCode = 200;
        $response = $producers;

        if(!$producers) {
            $response = [
                'error' => 'Producer does not exist'
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
            $producer = Producer::create($request->all());
            $response = [
                "message" => "Producer created succesfully",
                "data" => $producer
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
        $producer = Producer::find($id);
        $statusCode = 200;
        $response = $producer;

        if(!$producer) {
            $response = [
                'error' => 'Producer does not exist'
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
            $producer = Producer::find($id);
            $producer->name = $request->name;
            $producer->alias = $request->alias;
            $producer->save();

            $response = [
                "message" => "Producer updated succesfully"
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
        $checkId = Producer::find($id);
        if(!$checkId) {
            $response = [
                "error" => "Producer does not exits"
            ];
            $statusCode = 404;
        } else {
            Producer::destroy($id);
            $response = [
                "message" => "Producer deleted succesfully"
            ];
            $statusCode = 200;
        }
        
        return response($response, $statusCode)->header('Content-Type', 'application/json');
    }
}
