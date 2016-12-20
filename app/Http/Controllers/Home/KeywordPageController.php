<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Keyword;

class KeywordPageController extends Controller
{
    public function index() {
        $keywords = Keyword::orderBy('name', 'ASC')->get()->toArray();

        return view('home.keyword.index', compact('keywords'));
    }

    public function show($id) {
        $keyword = Keyword::select('name')->find($id)->toArray();
        $movies = Keyword::find($id)->movie()->get()->toArray();

        return view('home.keyword.show', compact('movies', 'keyword'));
        // echo '<pre>';
        // print_r($keyword);
    }
}
