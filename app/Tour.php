<?php
//MODELO
namespace App;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    public function category()
    {
        return $this->belongsTo(Category::class); //UN TOUR PERTENCE A UNA CATEGORIA
    }

    public function images()
    {
        return $this->belongsTo(TourImage::class); //UNA TOUR TIENE UNA IMAGEN ASOCIADA
    } 
    
    public function guide()
    {
        return $this->belongsTo(Guide::class); //UNA TOUR TIENE UNA IMAGEN ASOCIADA
    } 
}
