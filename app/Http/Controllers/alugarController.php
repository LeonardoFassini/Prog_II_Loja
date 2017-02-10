<?php

namespace App\Http\Controllers;

use App\produtos;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class alugarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $produto = produtos::all();
      return view('/alugar.visualizar', ['produto' => produtos::all()]);
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
        //
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
    public function edit($id, $email)
    {
      $produtos = produtos::find($id);
      $produtos->Disponibilidade = 0;
      $produtos->Qalugou = $email;
      $produtos->save();
      return redirect('/alugar/rented');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

    }


    public function rented(){
      return view('/alugar.rented');
    }

    public function unrent($id){
      $produtos = produtos::find($id);
      $produtos->Disponibilidade = 1;
      $produtos->Qalugou = NULL;
      $produtos->save();
      return redirect('alugar/unrented');
    }

    public function unrented(){
      return view('/alugar.unrented');
    }

    public function destroy($id)
    {
        //
    }
}
