<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $table = 'movies';
    protected $fillable = ['name', 'alias', 'status', 'thumb', 'views', 'likes', 'current_episodes', 'total_episodes', 'description', 'year_id', 'season_id'];
    public $timestamp = true;

    public function year() {
        return $this->belongsTo('App\Year');
    }
    public function season() {
        return $this->belongsTo('App\Season');
    }
    public function genre() {
        return $this->belongsToMany('App\Genre', 'genre_movies')->withTimestamps();
    }

    public function producer() {
        return $this->belongsToMany('App\Producer', 'producer_movies')->withTimestamps();
    }
    public function episode() {
        return $this->hasMany('App\Episode');
    }

    public function fansub() {
        return $this->belongsToMany('App\Fansub', 'fansub_movies')->withTimestamps();
    }
    public function keyword() {
        return $this->belongsToMany('App\Keyword', 'movie_keywords')->withTimestamps();
    }
}
