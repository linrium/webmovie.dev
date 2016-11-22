<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\YearRequest;
use App\Year;

class YearController extends Controller
{

    private function transformCollection($years) {
        return array_map([$this, 'transform'], $years->toArray());
    }

    private function transform($year) {
        return [
            'objectId' => $year['id'],
            'name' => $year['name'],
            'alias' => $year['alias'],
        ];
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $years = Year::all();
        $statusCode = 200;
        $response = $years;

        if(!$years) {
            $response = [
                'error' => 'Year does not exist'
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
            $year = Year::create($request->all());
            $response = [
                "message" => "Year created succesfully",
                "data" => $year
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
        $year = Year::find($id);
        $statusCode = 200;
        $response = $year;

        if(!$year) {
            $response = [
                'error' => 'Year does not exist'
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
            $year = Year::find($id);
            $year->name = $request->name;
            $year->alias = $request->alias;
            $year->save();

            $response = [
                "message" => "Year updated succesfully"
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
        Year::destroy($id);
    }
}
