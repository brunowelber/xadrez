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
@forelse($jogador->comentarios()->orderBy("id","desc")->get() as $comentario)
<p id="{{ $loop->iteration }}">
{{ $loop->remaining+1 }}. {{ $comentario->created_at->format("d/m/Y \a\s H:i") }}<br/>
{{ $comentario->comentario }}
</p>
<form action="{{ route("comentario.destroy",[$comentario->id]) }}" method="post">
@csrf
@method("delete")
<button aria-describedby="{{ $loop->iteration }}" type="submit" class="btn btn-danger" >Excluir</button>
</form>
@empty		
		<p class="text-center"><strong>Não existem comentários para esse jogador</strong></p>
		@endforelse
		<h4>Novo comentário</h4>
<form action="{{ url("/comentario/".$jogador->id) }}" method="post">	
		@csrf
		<div class="form-group">
		<label for="comentario">Comentário</label>
		<textarea name="comentario" id="comentario" col="40" row="2" class="form-control"></textarea>
		</div>
		<button type="submit" class="btn">Cadastrar</button>
				</form>
		
		@endsection
		