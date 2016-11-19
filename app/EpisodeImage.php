<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EpisodeImage extends Model
{
    protected $table = 'episode_images';
    protected $fillable = ['image', 'episode_id'];
    public $timestamp = false;

    public function episode() {
        return $this->belongsTo('App\Episode');
    }
}
