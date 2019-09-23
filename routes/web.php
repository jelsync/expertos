<?php
// Route::get('/', function () {
//     return view('welcome');
// });
//SE DEFINEN LAS RUTAS
Route::get('/', 'TestController@bienvenido');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('/tours', 'TourController@index'); //index convencion devuelve un listado
    Route::get('/tours/create', 'TourController@create'); //create convencion create convencion devuelve un formulario
    Route::post('/tours', 'TourController@store'); //store convencion guardara un formulario
    Route::get('/tours/{id}/edit', 'TourController@edit'); //editar mostrar
    Route::post('/tours/{id}/edit', 'TourController@update'); //actualizar
    Route::get('/tours/{id}/delete', 'TourController@destroy'); //eliminar

    Route::get('/tours/{id}/images', 'ImageController@index'); //eliminar
    Route::post('/tours/{id}/images', 'ImageController@store'); //eliminar
    Route::delete('/tours/{id}/images', 'ImageController@destroy'); //eliminar


});

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
