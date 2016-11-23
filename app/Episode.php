<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    protected $table = 'episodes';
    protected $fillable = ['name', 'movie_id'];
    public $timestamp = true;

    public function episode_season() {
        return $this->belongsTo('App\Movie');
    }
    public function link() {
        return $this->hasMany('App\EpisodeLink');
    }
    public function keywords() {
        return $this->belongsToMany('App\Keyword', 'episode_keywords')->withTimestamps();
    }
}
