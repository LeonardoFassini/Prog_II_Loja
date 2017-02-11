@extends('layouts.layout')
@section('corpo')
<h1> SOBRE </h1>
<hr>

<p>Oi, meu nome é Leonardo, academico da uffs c:</p>

<p>Estamos a 0 dias no mercado! \o/</p>

<p>O nosso intuito é alugar computadores para que, criadores de eventos possam <strong>não se preocupar</strong> de onde tirar
  computadores para os campeonatos de e-sports, precise fazer algo com LAN ou use muitos computadores.</p>
<p>Com este projeto, pude entender o bootstrap e o laraver. Achei que ia ser fácil, mas foi bem mais dificis do que o esperado.</p>
<p><s>NAO CAIA NESSA, SAPORRA EH DIFICIL DEMAISS!!!!!</s></p>
<p>É possível ver seu ranking, caso seja um ótimo cliente.</p>
<p>
  Nós te amamos <b>S2</b>
</p>
<img src="/img/trap.jpg" class="img-fluid" alt="ITS_A_TRAP">
@stop

@section('navbar')
<ul class="nav navbar-nav">
	<li><a href="alugar"> Alugar </a> </li>
	<li><a href="anunciar">Anunciar</a></li>
	<li><a href="maisAlugados">Mais Alugados</a></li>
	<li><a href="maisAlugou">Mais Alugou</a></li>
	<li class="active"><a href="sobre">Sobre</a></li>
	<li><a href="faleConosco">Fale Conosco</a></li>
</ul>
@stop
