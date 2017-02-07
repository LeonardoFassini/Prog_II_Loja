<?php /* Leonardo Tironi Fassini */ ?>
<!DOCTYPE html>
<html>
<head>
	<title> Só nos computer locações </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<link rel= "stylesheet" href="/css/app.css" media="screen" type="text/css">
	<!-- Scripts -->
	<script>
	window.Laravel = <?php echo json_encode([
		'csrfToken' => csrf_token(),
	]); ?>
	</script>
	<script src="/js/app.js"></script>
</head>

<body>
	<script>
    var docURL = document.URL;
    var linksList = document.querySelectorAll('a[href]');
    for (var i = 0; i< linksList.length; i++) {
        var link = linksList[i];
        if (link.href === docURL) {
            link.className += 'active';
        }
    }
</script>
	<div id="app">
		<!-- Navbar inteira -->
		<nav class="navbar navbar-default navbar-static-top">
			<div class="container">
				<div class="navbar-header">

					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
						<span class="sr-only"> Toggle Navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>

					<a class="navbar-brand" href="/">SNC
					</a>
				</div>

				<div class="collapse navbar-collapse" id="navbar-collapse-1">

					<ul class="nav navbar-nav">
						<li class="<%= 'active' if current_page?(alugar)%>"><a href="alugar"> Alugar </a> </li>
						<li><a href="anunciar">Anunciar</a></li>
						<li><a href="alugar">Alugar</a></li>
						<li><a href="maisAlugados">Mais Alugados</a></li>
						<li><a href="maisAlugou">Mais Alugou</a></li>
						<li><a href="cadastrar">Cadastrar</a></li>
						<li><a href="sobre">Sobre</a></li>
						<li><a href="faleConosco">faleConosco</a></li>
					</ul>


					<!-- Direita da navbar -->
					<ul class="nav navbar-nav navbar-right">
						<!-- Authentication Links -->
						@if (Auth::guest())
						<li><a href="{{ url('/login') }}">Login</a></li>
						<li><a href="{{ url('/register') }}">Register</a></li>
						@else
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
								{{ Auth::user()->name }} <span class="caret"></span>
							</a>

							<ul class="dropdown-menu" role="menu">
								<li>
									<a href="{{ url('/logout') }}"
									onclick="event.preventDefault();
									document.getElementById('logout-form').submit();">
									Logout
								</a>

								<form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
									{{ csrf_field() }}
								</form>
							</li>
						</ul>
					</li>
					@endif
				</ul>


			</div>
		</div>
	</nav>

	<!-- Container contendo o corpo das parada -->
	<div class="container">

		<div class="row">

			<div class="col-md-8 col-xs-12">

				<div class="clear"></div>

				<div id="corpo">
					@yield('corpo')
				</div>

				<div class="clear"></div>
			</div>
		</div>
	</div>
</div>
</body>
</html>