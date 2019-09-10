<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TourImage extends Model
{
    public function tour()
    {
        return $this->belongsTo(Tour::class);
    }
}
