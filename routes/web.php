<?php
// Route::get('/', function () {
//     return view('welcome');
// });
//SE DEFINEN LAS RUTAS
Route::get('/', 'TestController@bienvenido');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin/tours', 'TourController@index'); //index convencion devuelve un listado
Route::get('/admin/tours/create', 'TourController@create');//create convencion create convencion devuelve un formulario
Route::post('/admin/tours', 'TourController@store');//store convencion guardara un formulario
Route::get('/admin/tours/{id}/edit', 'TourController@edit');//editar mostrar
Route::post('/admin/tours/{id}/edit', 'TourController@update');//actualizar
Route::get('/admin/tours/{id}/delete', 'TourController@destroy');//eliminar


// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
