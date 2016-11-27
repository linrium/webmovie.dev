<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    protected $table = 'episodes';
    protected $fillable = ['name', 'alias', 'movie_id'];
    public $timestamp = true;

    public function movie() {
        return $this->belongsTo('App\Movie');
    }
    public function link() {
        return $this->hasMany('App\EpisodeLink');
    }
    public function keywords() {
        return $this->belongsToMany('App\Keyword', 'episode_keywords')->withTimestamps();
    }
}
