<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MovieImage extends Model
{
    protected $table = 'movie_images';
    protected $fillable = ['image', 'movie_id'];
    public $timestamp = false;

    public function movie() {
        return $this->belongsTo('App\Movie');
    }
}
