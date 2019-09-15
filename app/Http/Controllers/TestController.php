<?php
namespace App\Http\Controllers;

use App\Tour;

use Illuminate\Http\Request;

class TestController extends Controller
{ 
    public function bienvenido(){
        $tours = Tour::all(); //OBTENER TODOS LOS DATOS DEl MODELO TOUR ASOSCIADO A LA TABLA tours
         return view('welcome')->with(compact('tours'));//INYECTA A LA VISTA WELCOME UN ARREGLO ASOCIATIVO
    }
    
}
