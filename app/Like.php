<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{

    protected $table = 'likeables';

    protected $fillable = [
        'user_id',
        'episode_id',
    ];
}
