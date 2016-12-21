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
        $data = Genre::select('id', 'name')->orderBy('id', 'DESC')->paginate(5);

        return view('admin.genre.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('admin.genre.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GenreRequest $request)
    {
        $genre = new Genre();
        $genre->name = $request->txtName;
        $genre->alias = changeTitle($request->txtName);
        $genre->save();

        return redirect()->route('genre.index')->with([
            'flash_level'=>'success',
            'flash_message'=>'Genre created succesfully'
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
        $genre = Genre::find($id)->toArray();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $genre = Genre::find($id)->toArray();

        return view('admin.genre.edit', compact('genre'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(GenreRequest $request, $id)
    {
        $genre = Genre::find($id);
        $genre->name = $request->txtName;
        $genre->alias = changeTitle($request->txtName);
        $genre->save();

        return redirect()->route('genre.index')->with([
            'flash_level'=>'success',
            'flash_message'=>'Genre updated succesfully'
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
        $genre = Genre::destroy($id);

        return redirect()->route('genre.index')->with([
            'flash_level'=>'success',
            'flash_message'=>'Genre deleted succesfully'
        ]);
    }
}
