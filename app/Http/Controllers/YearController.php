<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\YearRequest;
use App\Year;

class YearController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Year::select('id','name')->orderBy('id', 'DESC')->get()->toArray();
        return view('admin.year.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('admin.year.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(YearRequest $request)
    {
        $year = new Year();
        $year->name = $request->txtName;
        $year->alias = changeTitle($request->txtName);
        $year->save();

        return redirect()->route('year.index')->with([
            'flash_level'=>'success',
            'flash_message'=>'Year created succesfully'
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
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        echo $id;
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
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $year = Year::find($id);
        $year->delete();

        return redirect()->route('year.index')->with([
            'flash_level'=>'success',
            'flash_message'=>'Year created succesfully'
        ]);
    }
}
