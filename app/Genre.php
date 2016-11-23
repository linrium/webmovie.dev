<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $table = 'genres';
    protected $fillable = ['name', 'alias'];
    public $timestamp = true;

    public function movie() {
        return $this->belongsToMany('App\Movie', 'genre_movies')->withTimestamps();
    }
}
