@extends('template',['title'=>"Cadastrar jogador"])
@section('conteudo')
		<h2>Cadastro de jogadores</h2>
		<form action="{{ route("jogador.store") }}" method="post">
		@csrf
		<label for="nome">Nome:</label>
		<input name="nome" id="nome" type="text" required />
		<label for="score">Score</label>
		<input name="score" id="score" type="text" required />
		<button type="submit">Cadastrar</button>
				</form>
		@endsection
		