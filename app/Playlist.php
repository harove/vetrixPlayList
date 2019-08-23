<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Playlist extends Model
{
    public function heroes()
    {
        return $this->hasMany('App\Heroe');
    }
}
