<?php
namespace App\Http\Controllers;

use App\Tour;

use Illuminate\Http\Request;

class TestController extends Controller
{ 
    public function bienvenido(){
        $tours = Tour::all();
         return view('welcome')->with(compact('tours'));
    }
    
}
