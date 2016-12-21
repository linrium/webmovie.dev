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
        $data = Season::select('id', 'name')->orderBy('id', 'DESC')->paginate(5);

        return view('admin.season.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('admin.season.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SeasonRequest $request)
    {
        $season = new Season();
        $season->name = $request->txtName;
        $season->alias = changeTitle($request->txtName);
        $season->save();

        return redirect()->route('season.index')->with([
            'flash_level'=>'success',
            'flash_message'=>'Season created succesfully'
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
        $season = Season::find($id)->toArray();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $season = Season::find($id)->toArray();

        return view('admin.season.edit', compact('season'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SeasonRequest $request, $id)
    {
        $season = Season::find($id);
        $season->name = $request->txtName;
        $season->alias = changeTitle($request->txtName);
        $season->save();

        return redirect()->route('season.index')->with([
            'flash_level'=>'success',
            'flash_message'=>'Season updated succesfully'
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
        $season = Season::destroy($id);

        return redirect()->route('season.index')->with([
            'flash_level'=>'success',
            'flash_message'=>'Season deleted succesfully'
        ]);
    }
}
