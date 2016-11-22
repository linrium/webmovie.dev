<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $table = 'movies';
    protected $fillable = ['name', 'alias', 'trailer', 'keywords', 'views', 'rank', 'total_episodes', 'duration', 'description', 'year_id', 'season_id'];
    public $timestamp = false;

    public function year() {
        return $this->belongsTo('App\Year');
    }
    public function season() {
        return $this->belongsTo('App\Season');
    }
    public function genre() {
        return $this->belongsToMany('App\Genre', 'genre_movies')->withTimestamps();
    }

    public function movie_image() {
        return $this->hasMany('App\MovieImage');
    }
    public function producer() {
        return $this->belongsTo('App\Producer');
    }
    public function episode() {
        return $this->hasMany('App\Episode');
    }

    public function fansub() {
        return $this->belongsToMany('App\Fansub', 'fansub_movies')->withTimestamps();
    }
    public function keywords() {
        return $this->belongsToMany('App\Keyword', 'movie_keywords')->withTimestamps();
    }
}
