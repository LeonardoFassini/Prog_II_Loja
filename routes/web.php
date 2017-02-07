<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
  return view('index');
});

Route::get('faleConosco', function(){
  return view('faleConosco');
});

Route::get('maisAlugados', function(){
  return view('maisAlugados');
});

Route::get('maisAlugou', function(){
  return view('maisAlugou');
});

Route::get('cadastro', function(){
  return view('cadastro');
});

Route::get('anunciar', function(){
  return view('anunciar');
});

Route::get('alugar', function(){
  return view('alugar');
});

Route::get('sobre', function(){
  return view('sobre');
});

Route::get('welcome', function(){
  return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
