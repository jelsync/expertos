<?php
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'TestController@bienvenido');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
