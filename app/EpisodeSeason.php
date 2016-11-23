<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EpisodeSeason extends Model
{
    protected $table = 'episodes';
    protected $fillable = ['name', 'alias'];
    public $timestamp = true;

    public function movie() {
        return $this->belongsTo('App\Movie');
    }
    public function episode() {
        return $this->hasMany('App\Episode');
    }
}
