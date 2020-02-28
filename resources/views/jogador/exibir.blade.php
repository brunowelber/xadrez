@extends('template',['title'=>"detalhes do jogador"])
@section('conteudo')
		<h2>Jogador - {{ $jogador->nome }}</h2>
		<div class="row">
		<div class="col-8">
						<strong>Score:</strong> {{ $jogador->score }}
				</div>
				<div class="col-4">
<a href="{{ route("jogador.edit",[$jogador->id]) }}" title="Editar dados do jogador" class="btn btn-primary" role="button">Editar</a>
<form action="{{ route("jogador.destroy",[$jogador->id]) }}" method="post">
@csrf
@method("delete")
<button type="submit" class="btn btn-danger" title="Excluir jogador em definitivo">Excluir</button>
</form>
		</div>
		</div>
		
		
		@endsection
		