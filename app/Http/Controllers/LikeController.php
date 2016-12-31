<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Like;
use App\Episode;
use App\Movie;
use Auth;

class LikeController extends Controller
{
    public function like($id, $movie_id) {
        $like = new Like();
        $like->user_id = Auth::id();
        $like->episode_id = $id;
        $like->save();

        $episode = Episode::find($id);
        $episode->likes = $episode->likes += 1;
        $episode->save();

        $movie = Movie:: find($movie_id);
        $movie->likes = $movie->likes += 1;
        $movie->save();

        return redirect()->back();
        // echo '<pre>';
        // print_r($episode);
    }
    
    public function unlike($id, $episode_id, $movie_id) {
        $episode = Episode::find($episode_id);
        if($episode->likes !== 0)
            $episode->likes = $episode->likes -= 1;
        $episode->save();

        $movie = Movie::find($movie_id);
        if($movie->likes !== 0)
            $movie->likes = $movie->likes -= 1;
        $movie->save();

        Like::destroy($id);

        return redirect()->back();
        // echo '<pre>';
        // print_r($id);
    }
}
