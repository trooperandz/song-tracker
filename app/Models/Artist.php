<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    /**
     * Get the songs associated with the artist
     */
    public function song()
    {
        return $this->belongsTo('App\Song');
    }
}
