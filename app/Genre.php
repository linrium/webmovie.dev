<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $table = 'genres';
    protected $fillable = ['name', 'alias'];
    public $timestamp = false;

    public function movie() {
        return $this->belongsToMany('App\Movie')->withTimestamps();
    }
}
