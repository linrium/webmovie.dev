<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Fansub;

class FansubPageController extends Controller
{
    public function index() {
        $fansubs = Fansub::orderBy('name', 'ASC')->get()->toArray();

        return view('home.fansub.index', compact('fansubs'));
    }

    public function show($id) {
        $fansub = Fansub::select('name')->find($id)->toArray();
        $movies = Fansub::find($id)->movie()->get()->toArray();

        return view('home.fansub.show', compact('movies', 'fansub'));
        // echo '<pre>';
        // print_r($fansub);
    }
}
