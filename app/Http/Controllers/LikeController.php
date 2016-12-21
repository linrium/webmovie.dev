<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Like;
use App\Episode;
use Auth;

class LikeController extends Controller
{
    public function like($id) {
        $like = new Like();
        $like->user_id = Auth::id();
        $like->episode_id = $id;
        $like->save();

        return redirect()->back();
    }
    
    public function unlike($id) {
        Like::destroy($id);

        return redirect()->back();
    }
}
