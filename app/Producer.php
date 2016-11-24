<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producer extends Model
{
    protected $table = 'producers';
    protected $fillable = ['name', 'alias'];
    public $timestamp = true;

    public function movie() {
        return $this->belongsToMany('App\Movie', 'producer_movies')->withTimestamps();
    }
}
