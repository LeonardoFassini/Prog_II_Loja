@extends('layouts.layout')
@section('corpo')
<h1> ALUGAR </h1>
<hr>
<div class="panel panel-default">
	<div class="panel-heading text-center">Todos os computadores </div>
	<div class="table-responsive">
		<table class="table table-bordered table-hover">

			<thead>
				<th>Tipo</th>
				<th>Processador</th>
				<th>Memoria RAM</th>
				<th>Placa de Video</th>
				<th>Dono</th>
				<th>Preço</th>
				<th>Disponibilidade</th>
				<th>Alugar</th>
				<th>Editar</th>
				<th>Devolver</th>
			</thead>

			<tbody>
				@foreach($produto as $produto)
				<tr>
					<td><?php echo ($produto->Preco) ?></td>
					<td><?php echo $produto->PlacaDeVideo?></td>
					<td><?php echo $produto->Tipo?></td>
					<td><?php echo $produto->Processador?></td>
					<td><?php echo $produto->ram?></td>
					<td><?php echo $produto->Dono?></td>
					<td>
						@if ($produto->Disponibilidade == 1)
						<?php echo "Disponível" ?>
						@else
						<?php echo "Indisponível" ?>
						@endif
					</td>
					<td><a href="/alugar/rent/<?php echo $produto->id?>/<?php echo Auth::user()->email?>" <button type="button" class="btn btn-default">Alugar</button> </a> </td>
					<td><a href="/anunciar/edit/<?php echo $produto->id ?>" <button type="button" class="btn btn-default">Editar</button> </a></td>
					<td>
						@if ($produto->Qalugou == Auth::user()->email && $produto->disponibilidade == 0)
						<a href="/alugar/unrent/<?php echo $produto->id?>" <button type="button" class="btn btn-default">Devolver</button> </a>
						@endif
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>

@stop

@section('navbar')
<ul class="nav navbar-nav">
	<li class="active"><a href="alugar"> Alugar </a> </li>
	<li><a href="anunciar">Anunciar</a></li>
	<li><a href="maisAlugados">Mais Alugados</a></li>
	<li><a href="maisAlugou">Mais Alugou</a></li>
	<li><a href="sobre">Sobre</a></li>
	<li><a href="faleConosco">Fale Conosco</a></li>
</ul>
@stop
