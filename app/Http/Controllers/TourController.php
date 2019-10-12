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
    
    public function store(Request $request)
    {
        //guarda el formulario
        // dd($request->all());
        $tour = new Tour();
        
        $tour -> name = $request->input('name');   
        $tour -> description = $request->input('description');   
        $tour -> price = $request->input('price');   
        $tour -> reservations = $request->input('reservations'); 
        $tour -> guide_id = $request->input('nombreGuia');
        $tour -> category_id = $request->input('nombreCategoria');  
        /* PRUEBA */
        $archivo = $request->file('foto');
        $guardar = public_path().'/img';
        $nombreArchivo = $archivo->getClientOriginalName();
        $archivo -> move($guardar, $nombreArchivo);
        
        $tour-> imagen = 'img/'.$nombreArchivo;

        $tour ->save();
        /* PRUEBA */



        $tour -> save();
        
        return redirect('/admin/tours');
    }

    public function edit($id)
    {
        // return "Imprime el $id";
        $categories = Category::all();
        $tours = Tour::find($id);
        $guides = Guide::all();
        return view('admin.tours.edit')->with(compact('tours', 'guides', 'categories')); //devuelve listado 
    }

    public function update(Request $request, $id)
    {
        $tour = Tour::find($id);
        $tour -> name = $request->input('name');   
        $tour -> description = $request->input('description');   
        $tour -> price = $request->input('price');   
        $tour -> reservations = $request->input('reservations'); 
        $tour -> guide_id = $request->input('nombreGuia');  
        $tour -> category_id = $request->input('nombreCategoria');  
        $tour -> save();
        
        return redirect('/admin/tours');
    }

    public function destroy( $id)
    {
        // $guide = new Guide();
        $tour = Tour::find($id);
        $tour -> delete();
        
        return back();
    }
}