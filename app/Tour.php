<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function images()
    {
        return $this->belongsTo(TourImage ::class);
    } 
}
