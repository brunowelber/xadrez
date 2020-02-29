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
<h3>Comentários</h3>
@forelse($jogador->comentarios as $comentario)
<p>{{ $comentario->comentario }}</p>
@empty		
		<p class="text-center">Não existem comentários para esse jogador</p>
		@endforelse
		<h4>Novo comentário</h4>
<form action="{{ url("/comentario/".$jogador->id) }}" method="post">	
		@csrf
		<div class="form-group">
		<label for="comentario">Comentário</label>
		<textarea name="comentario" id="comentario" col="40" row="2" class="form-control"></textarea>
		<button type="submit" class="btn">Cadastrar</button>
		</div>
		</form>
		
		@endsection
		