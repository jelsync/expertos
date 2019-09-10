<?php

namespace App;

use Illuminate\Database\Eloquent\Model; 

class Category extends Model
{
    public function tours()
    {
        return $this->hasMany(Tour::class);
    }

}
