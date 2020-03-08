<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8" />
<title>Jogax - {{ $title }}</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="container-fluid">
	<header>
		<h1>{{ $title }}</h1>
		<nav>
		<a href="{{ url("/jogadores") }}" title="Jogadores do Jogax">Jogadores</a>
		<a href="{{ url("/partidas") }}" title="Partidas cadastradas no Jogax">Partidas</a>
				</nav>
		</header>
		<main>
		@yield('conteudo')
		</main>
		<footer>
		<p><br/>Jogax a sua mente em um movimento<br/></p>
		</footer>
		</div>
</body>
</html>