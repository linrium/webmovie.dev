<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\KeywordRequest;
use App\Keyword;

class KeywordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $keywords = Keyword::all();
        $statusCode = 200;
        $response = $keywords;

        if(!$keywords) {
            $response = [
                'error' => 'Keyword does not exist'
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
            $keyword = Keyword::create($request->all());
            $response = [
                "message" => "Keyword created succesfully",
                "data" => $keyword
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
        $keyword = Keyword::find($id);
        $statusCode = 200;
        $response = $keyword;

        if(!$keyword) {
            $response = [
                'error' => 'Keyword does not exist'
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
            $keyword = Keyword::find($id);
            $keyword->name = $request->name;
            $keyword->alias = $request->alias;
            $keyword->save();

            $response = [
                "message" => "Keyword updated succesfully"
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
        $checkId = Keyword::find($id);
        if(!$checkId) {
            $response = [
                "error" => "Keyword does not exits"
            ];
            $statusCode = 404;
        } else {
            Keyword::destroy($id);
            $response = [
                "message" => "Keyword deleted succesfully"
            ];
            $statusCode = 200;
        }
        
        return response($response, $statusCode)->header('Content-Type', 'application/json');
    }
}
