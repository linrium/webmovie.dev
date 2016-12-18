<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Producer;

class ProducerPageController extends Controller
{
    public function index() {
        $producers = Producer::orderBy('name', 'ASC')->get()->toArray();

        return view('home.producer.index', compact('producers'));
    }

    public function show($id) {
        $producer = Producer::select('name')->find($id)->toArray();
        $movies = Producer::find($id)->movie()->get()->toArray();

        return view('home.producer.show', compact('movies', 'producer'));
        // echo '<pre>';
        // print_r($producer);
    }
}
