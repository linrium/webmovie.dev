<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Year;
use App\Movie;


class YearPageController extends Controller
{
    public function index() {
        $years = Year::orderBy('name', 'ASC')->get()->toArray();

        return view('home.year.index', compact('years'));
    }

    public function show($id) {
        $year = Year::select('name')->find($id)->toArray();
        $movies = Movie::where('year_id',$id)->get()->toArray();

        return view('home.year.show', compact('movies', 'year'));
        // echo '<pre>';
        // print_r($movies);
    }
}
