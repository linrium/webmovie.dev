<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Year extends Model
{
    protected $table = 'years';
    protected $fillable = ['name', 'alias'];
    public $timestamp = false;

    public function movie() {
        return $this->hasMany('App\Year');
    }
}
