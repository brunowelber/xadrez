@extends('template',['title'=>"Cadastrar jogador"])
@section('conteudo')
		<h2>Cadastro de jogadores</h2>
		<form action="{{ route("jogador.store") }}" method="post">
		@csrf
		<div class="form-group">
		<label for="nome">Nome:</label>
		<input name="nome" id="nome" type="text" required class="form-control" />
		</div>
		<div class="form-group">
		<label for="score">Score</label>
		<input name="score" id="score" type="number" required class="form-control" />
		</div>
		<button type="submit" class="btn btn-primary">Cadastrar</button>
				</form>
		@endsection
		