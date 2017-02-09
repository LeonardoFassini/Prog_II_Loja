@extends('layouts.layout')
@section('corpo')
  <!-- Formulario para insercao no banco -->

  <h1> ANUNCIAR </h1>
  <form method="POST" action="/anunciar/create">
    {{ csrf_field() }}
    <hr>
    @if (Auth::guest())
      <p>Voce nao está logado! Para anunciar, primeiro se logue!</p>
    @else
      <!-- email -->
      <div class="form-group">
        <label for="email">Email</label>
        <p class="form-control-static"> {{ Auth::user()->email }}</p>
      </div>

      <input type="hidden" name="email" value="{{ Auth::user()->email }}">

      <!-- Tipo de pc -->
      <div class="form-group">
        <label for="modelopc"> Tipo do computador </label>
        <select class="form-control" id="modelopc" name="modelopc">
          <option> Notebook </option>
          <option> Desktop </option>
        </select>
      </div>

      <!-- Modelo do pc -->
      <div class="form-group">
        <label for="modeloprocessador"> Modelo do Processador </label>
        <select class="form-control" id="modeloprocessador" name="modeloprocessador">
          <option> Dual core </option>
          <option> Quad core </option>
          <option> i3 </option>
          <option> i5 </option>
          <option> i7 </option>
          <option> Amd </option>
        </select>
      </div>

      <!-- placa de video -->
      <div class="form-group">
        <label for="modeloplaca"> Modelo da placa de video </label>
        <select class="form-control" id="modeloplaca" name="modeloplaca">
          <option> 512mb </option>
          <option> 1gb </option>
          <option> 2gb </option>
          <option> 4gb </option>
          <option> 8gb </option>
        </select>
      </div>

      <!-- Ram -->
      <div class"form-group">
        <label for="modeloram"> Modelo da ram </label>
        <select class="form-control" id="modeloram" name="modeloram">
          <option> 512mb </option>
          <option> 1gb-3gb </option>
          <option> 4gb-6gb </option>
          <option> 6gb-8gb </option>
          <option> 9gb-16gb </option>
          <option> 16gb+ </option>
        </select>
      </div>
      <hr>

      <!-- preco -->
      <div class="form-group">
        <label class="form-group"> Preço </label>
        <input type="text" id="preco" name="preco">
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-primary"> Anunciar </button>
      </div>
      @endif
  </div>
  @stop

  @section('navbar')
  <ul class="nav navbar-nav">
  	<li><a href="alugar"> Alugar </a> </li>
  	<li class="active"><a href="anunciar">Anunciar</a></li>
  	<li><a href="maisAlugados">Mais Alugados</a></li>
  	<li><a href="maisAlugou">Mais Alugou</a></li>
  	<li><a href="sobre">Sobre</a></li>
  	<li><a href="faleConosco">Fale Conosco</a></li>
  </ul>
  @stop
