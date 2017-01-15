<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    /**
     * Get the songs that have the genre
     */
    public function song()
    {
        return $this->belongsTo('App\Song');
    }
}
