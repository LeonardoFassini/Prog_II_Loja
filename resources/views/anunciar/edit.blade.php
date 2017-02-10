@extends('layouts.layout')
@section('corpo')
  <!-- Formulario para insercao no banco -->
	<?php $user = Auth::user()->email ?>
  <h1> EDITAR </h1>
	@if($produto->Dono == $user)
  <form method="POST" action="/anunciar/update/<?php $produto->id?>">
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

			<input type="hidden" name="id" value=<?php echo $produto->id?>>
      <!-- Tipo de pc -->
      <div class="form-group">
        <label for="modelopc"> Tipo do computador </label>
        <select class="form-control" id="modelopc" name="modelopc" value="<?php echo $produto->Tipo?>">
          <option> Notebook </option>
          <option> Desktop </option>
        </select>
      </div>

      <!-- Modelo do pc -->
      <div class="form-group">
        <label for="modeloprocessador"> Modelo do Processador </label>
        <select class="form-control" id="modeloprocessador" name="modeloprocessador" value="<?php echo $produto->Processador?>">
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
        <select class="form-control" id="modeloplaca" name="modeloplaca" value="<?php echo $produto->PlacaDeVideo?>">
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
        <select class="form-control" id="modeloram" name="modeloram" value="<?php echo $produto->ram?>">
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
        <input type="text" id="preco" name="preco" value="<?php echo $produto->Preco?>">
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-primary"> Editar </button>
      </div>
      @endif
			@else
			<div class="alert alert-danger" role="alert">
				<h2> Você não é o proprietario deste produto </h2>
			</div>
			@endif
  @stop

  @section('navbar')
  <ul class="nav navbar-nav">
  	<li><a href="/alugar"> Alugar </a> </li>
  	<li><a href="/anunciar">Anunciar</a></li>
  	<li><a href="/maisAlugados">Mais Alugados</a></li>
  	<li><a href="/maisAlugou">Mais Alugou</a></li>
  	<li><a href="/sobre">Sobre</a></li>
  	<li><a href="/faleConosco">Fale Conosco</a></li>
  </ul>
  @stop
