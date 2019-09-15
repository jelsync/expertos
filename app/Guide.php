<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guide extends Model
{
    public function tours()
    {
        return $this->hasMany(Tour::class);
    }
}
