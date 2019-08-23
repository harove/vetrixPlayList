<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Heroe extends Model
{
    protected $table = "heroes";

    public function playlists()
    {
        return $this->belongsTo('App\Playlist');
    }

}


