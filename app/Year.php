<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Year extends Model
{
    protected $table = 'years';
    protected $fillable = ['name', 'alias'];
    public $timestamp = true;

    public function movie() {
        return $this->hasMany('App\Movie');
    }
}
