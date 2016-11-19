<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producer extends Model
{
    protected $table = 'producers';
    protected $fillable = ['name', 'alias', 'movie_id'];
    public $timestamp = false;
}
