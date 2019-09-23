<?php

namespace App\Http\Controllers;

use App\Tour;
use App\Category;
use DB;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function index($id){
        // $categories = DB:: table('categories')
        // ->join('tours', 'tours.category_id', '=' , 'categories.id')
        // ->select('categories.image')
        // ->get();
        // dd($categories);
        // return view('admin.tours.images.index')->with(compact('categories'));
        

        $tours = Tour::find($id);
        $image = $tours->category->image;
        // return $image;
        return view('admin.tours.images.index')->with(compact( 'image', 'tours'));
    }
    public function store(Request $request, $id){
        $archivo = $request->file('foto');
        $guardar = public_path().'/img';
        $nombreArchivo = $archivo->getClientOriginalName();
        $archivo -> move($guardar, $nombreArchivo);
        
        $tourImage = new Category();
        $tourImage-> image = $nombreArchivo;
        $tourImage -> category_id = $id;
        $tourImage ->save();

        return back(); 
    }
    public function destroy(){
        
    }
}
