<?php

namespace App\Http\Controllers;

use App\produtos;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('/anunciar.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $produtos = new produtos;
      $produtos->Preco = $request->preco;
      $produtos->PlacaDeVideo = $request->modeloplaca;
      $produtos->Tipo = $request->modelopc;
      $produtos->Processador = $request->modeloprocessador;
      $produtos->ram = $request->modeloram;
      $produtos->Dono = $request->email;
      $produtos->Disponibilidade = 1;
      $produtos->save() ;
      return view('/anunciar.index', $request);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      return view('/anunciar.edit', ['produto' => produtos::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
      $produtos = produtos::find($request->id);
      $produtos->Preco = $request->preco;
      $produtos->PlacaDeVideo = $request->modeloplaca;
      $produtos->Tipo = $request->modelopc;
      $produtos->Processador = $request->modeloprocessador;
      $produtos->ram = $request->modeloram;
      $produtos->Dono = $request->email;
      $produtos->save();
      return view('/anunciar.updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        produtos::destroy($id);
        return redirect('/anunciar/destroyed');
    }

    public function destroyed(){
      return view('/anunciar.destroyed');
    }
}
