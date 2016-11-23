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
        $data = Producer::select('id', 'name')->orderBy('id', 'DESC')->get()->toArray();

        return view('admin.producer.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('admin.producer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProducerRequest $request)
    {
        $producer = new Producer();
        $producer->name = $request->txtName;
        $producer->alias = changeTitle($request->txtName);
        $producer->save();

        return redirect()->route('producer.index')->with([
            'flash_level'=>'success',
            'flash_message'=>'Producer created succesfully'
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
        $producer = Producer::find($id)->toArray();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $producer = Producer::find($id)->toArray();

        return view('admin.producer.edit', compact('producer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProducerRequest $request, $id)
    {
        $producer = Producer::find($id);
        $producer->name = $request->txtName;
        $producer->alias = changeTitle($request->txtName);
        $producer->save();

        return redirect()->route('producer.index')->with([
            'flash_level'=>'success',
            'flash_message'=>'Producer updated succesfully'
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
        $producer = Producer::destroy($id);

        return redirect()->route('producer.index')->with([
            'flash_level'=>'success',
            'flash_message'=>'Producer deleted succesfully'
        ]);
    }
}
