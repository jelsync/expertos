<?php

namespace App\Http\Controllers;

use App\Category;
use App\Guide;
use App\Tour;
use Illuminate\Http\Request;

class TourController extends Controller
{
    public function index()
    {
        // $tours = Tour::all();
        $tours = Tour::paginate(5);
        return view('admin.tours.index')->with(compact('tours')); //devuelve listado 
    }

    public function create()
    {
        $guides = Guide::all();
        $categories = Category::all();
        return view('admin.tours.create')->with(compact('guides', 'categories')); //devuelve formulario registro
    }
    
    public function store()
    {
        //guarda el formulario
    }
}
