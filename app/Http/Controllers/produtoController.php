<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class produtoController extends Controller{

    public function index(){
      return view('anunciar');
    }


}
