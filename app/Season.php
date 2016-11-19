<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Season extends Model
{
    protected $table = 'seasons';
    protected $fillable = ['name', 'alias'];
    public $timestamp = false;

    public function movie() {
        return $this->hasMany('App\Year');
    }
}
