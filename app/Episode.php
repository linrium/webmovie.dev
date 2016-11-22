<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    protected $table = 'episodes';
    protected $fillable = ['name', 'movie_id'];
    public $timestamp = false;

    public function movie() {
        return $this->belongsTo('App\Movie');
    }
    public function link() {
        return $this->hasMany('App\EpisodeLink');
    }
    public function episode_image() {
        return $this->hasMany('App\EpisodeImage');
    }
    public function keywords() {
        return $this->belongsToMany('App\Keyword', 'episode_keywords')->withTimestamps();
    }
}
