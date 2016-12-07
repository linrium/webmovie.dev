<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Auth;

use App\Movie;

class HomeController extends Controller
{
    public function index() {
        $movies = Movie::select('id', 'name', 'thumb')->orderBy('id', 'DESC')->get()->toArray();

        return view('home.main', compact('movies'));
    }
}
