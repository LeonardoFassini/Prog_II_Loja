<?php

// Views front end e etc
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
Route::get('/sobre', function(){
  return view('sobre');
});



// Detalhes do anuncio e cadastro do anuncio
Route::get('/anunciar', 'ProdutoController@index');
Route::post('/anunciar/create', 'ProdutoController@store');
Route::post('/anunciar/update/', 'ProdutoController@update');
Route::get('/anunciar/edit/{id}', 'ProdutoController@edit');
Route::get('/anunciar/destroy/{id}', 'ProdutoController@destroy');
Route::get('/anunciar/destroyed', 'ProdutoController@destroyed');


// Detalhes da lista de produtos, alem de alugar
Route::get('/alugar', 'alugarController@index');
Route::get('/alugar/rent/{id}/{email}', 'alugarController@edit');
Route::get('/alugar/rented', 'alugarController@rented');
Route::get('/alugar/unrent/{id}', 'alugarController@unrent');
Route::get('alugar/unrented', 'alugarController@unrented');


// Auths de login e register
Auth::routes();
Route::get('/home', 'HomeController@index');
