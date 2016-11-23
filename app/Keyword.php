<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Keyword extends Model
{
    protected $table = 'keywords';
    protected $fillable = ['name', 'alias'];
    public $timestamp = true;

    public function movie() {
        return $this->belongsToMany('App\Movie', 'movie_keywords')->withTimestamps();
    }
    public function episode() {
        return $this->belongsToMany('App\Episode', 'episode_keywords')->withTimestamps();
    }
}
