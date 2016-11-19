<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $table = 'movies';
    protected $fillable = ['name', 'alias', 'trailer', 'keywords', 'views', 'rank', 'total_episodes', 'duration', 'description', 'year_id', 'season_id'];
    public $timestamp = false;

    public function year() {
        return $this->belongsTo('App/Year');
    }
    public function season() {
        return $this->belongsTo('App/Season');
    }
}
