@extends('layouts.layout')
@section('corpo')
<h1> ANUCIAR </h1>
<hr>
<div class="alert alert-success text-center">
  <strong>Successo!</strong> Seu produto foi alugado!
</div class="text-center">
<a href="/"><button type="button" class="btn btn-success"> Inicio </button></a>
@stop

@section('navbar')
<ul class="nav navbar-nav">
  <li><a href="/alugar"> Alugar </a> </li>
  <li class="active"><a href="/anunciar">Anunciar</a></li>
  <li><a href="/maisAlugados">Mais Alugados</a></li>
  <li><a href="/maisAlugou">Mais Alugou</a></li>
  <li><a href="/sobre">Sobre</a></li>
  <li><a href="/faleConosco">Fale Conosco</a></li>
</ul>
@stop
