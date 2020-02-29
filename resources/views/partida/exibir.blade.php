@extends('template',['title'=>"detalhes da partida"])
@section('conteudo')
		<h2>Partida - {{ $partida->id }}</h2>
		<div class="row">
		<div class="col-8">
						<strong>Data:</strong> {{ $partida->data }}<br />
						<strong>Duração:</strong> {{ $partida->duracao }}<br/>
						<strong>Local:</strong> {{ $partida->local }}<br/>
						@foreach($partida->jogadores as $jogador)
						<strong>Jogador {{ $loop->iteration }}:</strong> {{ $jogador->nome }}<br/>
						@endforeach
				</div>
				<div class="col-4">
<a href="{{ route("partida.edit",[$partida->id]) }}" title="Editar dados da partida" class="btn btn-primary" role="button">Editar</a>
<form action="{{ route("partida.destroy",[$partida->id]) }}" method="post">
@csrf
@method("delete")
<button type="submit" class="btn btn-danger" title="Excluir partida em definitivo">Excluir</button>
</form>
		</div>
		</div>
		
		
		@endsection
		