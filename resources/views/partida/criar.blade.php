@extends('template',['title'=>"Cadastrar partida"])
@section('conteudo')
		<h2>Cadastro de partidas</h2>
		<form action="{{ route("partida.store") }}" method="post">
		@csrf
		<div class="form-group">
		<label for="data">Data:</label>
		<input name="data" id="data" type="date" required class="form-control" />
		</div>
		<div class="form-group">
		<label for="duracao">Duração</label>
		<input name="duracao" id="duracao" type="time" required class="form-control" />
		</div>
		<div class="form-group">
		<label for="local">Local</label>
		<input name="local" id="local" type="text" required class="form-control" />
		</div>
		<div class="form-group">
		<label for="jogador1">Jogador 1</label>
		<select class="form-control" name="jogador1" id="jogador1">
		@forelse($jogadores as $jogador)
		<option value="{{ $jogador->id }}">{{ $jogador->nome }}</option>
		@empty
		<option value="0">Não possui jogadores cadastrados</option>
		@endforelse
		</select>
		</div>
				<div class="form-group">
		<label for="jogador2">Jogador 2</label>
		<select class="form-control" name="jogador2" id="jogador2">
		@forelse($jogadores as $jogador)
		<option value="{{ $jogador->id }}">{{ $jogador->nome }}</option>
		@empty
		<option value="0">Não possui jogadores cadastrados</option>
		@endforelse
		</select>
		</div>

		<button type="submit" class="btn btn-primary">Cadastrar</button>
				</form>
		@endsection
		