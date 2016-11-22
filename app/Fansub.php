<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fansub extends Model
{
    protected $table = 'fansubs';
    protected $fillable = ['name', 'alias'];
    public $timestamp = false;

    public function movie() {
        return $this->belongsToMany('App\Movie', 'fansub_movies')->withTimestamps();
    }
}
