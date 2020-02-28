@extends('template',['title'=>"Editar jogador"])
@section('conteudo')
		<h2>Edição de jogador</h2>
		<form action="{{ route("jogador.update",[$jogador->id]) }}" method="post">
		@csrf
		@method("put")
		<div class="form-group">
		<label for="nome">Nome:</label>
		<input name="nome" id="nome" type="text" value="{{ $jogador->nome }}" required class="form-control" />
		</div>
		<div class="form-group">
		<label for="score">Score</label>
		<input name="score" id="score" type="number" value="{{ $jogador->score }}" required class="form-control" />
		</div>
		<button type="submit" class="btn btn-primary">Editar</button>
				</form>
		@endsection
		