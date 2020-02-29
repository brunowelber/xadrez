@extends('template',['title'=>"Editar partida"])
@section('conteudo')
		<h2>Edição de partidas</h2>
		<form action="{{ route("partida.update",[$partida->id]) }}" method="post">
		@csrf
		@method("put")
		<div class="form-group">
		<label for="data">Data:</label>
		<input name="data" id="data" type="date" value="{{ $partida->data }}" required class="form-control" />
		</div>
		<div class="form-group">
		<label for="duracao">Duração</label>
		<input name="duracao" id="duracao" type="time" value="{{ $partida->duracao }}" required class="form-control" />
		</div>
		<div class="form-group">
		<label for="local">Local</label>
		<input name="local" id="local" type="text" value="{{ $partida->local }}" required class="form-control" />
		</div>
		<div class="form-group">
		<label for="jogador1">Jogador 1</label>
		<select class="form-control" name="jogador1" id="jogador1">
		@forelse($jogadores as $jogador)
		<option value="{{ $jogador->id }}" {{ $jogador->id==$partida->jogadores()->pluck("jogadores.id")->toArray()[0]?"selected":"" }}>{{ $jogador->nome }}</option>
		@empty
		<option value="0">Não possui jogadores cadastrados</option>
		@endforelse
		</select>
		</div>
				<div class="form-group">
		<label for="jogador2">Jogador 2</label>
		<select class="form-control" name="jogador2" id="jogador2">
		@forelse($jogadores as $jogador)
		<option value="{{ $jogador->id }}" {{ $jogador->id==$partida->jogadores()->pluck("jogadores.id")->toArray()[1]?"selected":"" }}>{{ $jogador->nome }}</option>
		@empty
		<option value="0">Não possui jogadores cadastrados</option>
		@endforelse
		</select>
		</div>

		<button type="submit" class="btn btn-primary">Editar</button>
				</form>
		@endsection
		