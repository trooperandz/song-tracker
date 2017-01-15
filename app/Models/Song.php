<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    /**
     * Get the artist record associated with the song
     */
    public function artist()
    {
        return $this->hasOne('App\Artist');
    }

    /**
     * Get the genre record associated with the song
     */
    public function genre()
    {
        return $this->hasOne('App\Genre');
    }
}
