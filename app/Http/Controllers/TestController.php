<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{ 
    public function bienvenido(){
         return view('welcome');
    }
    
}
