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
        $data = Fansub::select('id', 'name')->orderBy('id', 'DESC')->get()->toArray();

        return view('admin.fansub.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('admin.fansub.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FansubRequest $request)
    {
        $fansub = new Fansub();
        $fansub->name = $request->txtName;
        $fansub->alias = changeTitle($request->txtName);
        $fansub->save();

        return redirect()->route('fansub.index')->with([
            'flash_level'=>'success',
            'flash_message'=>'Fansub created succesfully'
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
        $fansub = Fansub::find($id)->toArray();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fansub = Fansub::find($id)->toArray();

        return view('admin.fansub.edit', compact('fansub'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FansubRequest $request, $id)
    {
        $fansub = Fansub::find($id);
        $fansub->name = $request->txtName;
        $fansub->alias = changeTitle($request->txtName);
        $fansub->save();

        return redirect()->route('fansub.index')->with([
            'flash_level'=>'success',
            'flash_message'=>'Fansub updated succesfully'
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
        $fansub = Fansub::destroy($id);

        return redirect()->route('fansub.index')->with([
            'flash_level'=>'success',
            'flash_message'=>'Fansub deleted succesfully'
        ]);
    }
}
