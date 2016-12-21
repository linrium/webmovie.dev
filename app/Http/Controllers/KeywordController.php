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
        $data = Keyword::select('id', 'name')->orderBy('id', 'DESC')->paginate(5);

        return view('admin.keyword.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('admin.keyword.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(KeywordRequest $request)
    {
        $keyword = new Keyword();
        $keyword->name = $request->txtName;
        $keyword->alias = changeTitle($request->txtName);
        $keyword->save();

        return redirect()->route('keyword.index')->with([
            'flash_level'=>'success',
            'flash_message'=>'Keyword created succesfully'
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
        $keyword = Keyword::find($id)->toArray();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $keyword = Keyword::find($id)->toArray();

        return view('admin.keyword.edit', compact('keyword'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(KeywordRequest $request, $id)
    {
        $keyword = Keyword::find($id);
        $keyword->name = $request->txtName;
        $keyword->alias = changeTitle($request->txtName);
        $keyword->save();

        return redirect()->route('keyword.index')->with([
            'flash_level'=>'success',
            'flash_message'=>'Keyword updated succesfully'
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
        $keyword = Keyword::destroy($id);

        return redirect()->route('keyword.index')->with([
            'flash_level'=>'success',
            'flash_message'=>'Keyword deleted succesfully'
        ]);
    }
}
