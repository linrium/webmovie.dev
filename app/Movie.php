<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $table = 'movies';
    protected $fillable = ['name', 'alias', 'trailer', 'keywords', 'views', 'rank', 'total_episodes', 'duration', 'description', 'year_id', 'season_id'];
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
        return $this->belongsTo('App\Producer');
    }
    public function episode_season() {
        return $this->hasMany('App\EpisodeSeason');
    }

    public function fansub() {
        return $this->belongsToMany('App\Fansub', 'fansub_movies')->withTimestamps();
    }
    public function keywords() {
        return $this->belongsToMany('App\Keyword', 'movie_keywords')->withTimestamps();
    }
}
