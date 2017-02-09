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
// Views etc
Route::get('/', function () {
  return view('index');
});

Route::get('/faleConosco', function(){
  return view('faleConosco');
});

Route::get('/maisAlugados', function(){
  return view('maisAlugados');
});

Route::get('/maisAlugou', function(){
  return view('maisAlugou');
});

Route::get('/anunciar', 'ProdutoController@index');

Route::post('/anunciar/create', 'ProdutoController@store');

Route::get('/alugar', function(){
  return view('alugar');
});

Route::get('/sobre', function(){
  return view('sobre');
});

Route::get('/welcome', function(){
  return view('welcome');
});


// Auths
Auth::routes();

Route::get('/home', 'HomeController@index');

//DB

/* Route::get('submit', function(){
  $users = DB::insert("insert into produto(preco, PlacaDeVideo, Tipo, Processador, ram, Qalugou, Dono, Disponibilidade) values ")
}



); */
