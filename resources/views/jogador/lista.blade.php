@extends('template',['title'=>"Inicie seu jogo"])
@section('conteudo')
		<h2>Lista de jogadores</h2>
		<ul class="list-unstyled">
		@forelse($jogadores as $jogador)
		<li>{{ $jogador->nome }} - {{ $jogador->score }}</li>
		@empty
		<li>Não existem jogadores cadastrados</li>
		@endforelse
		</ul>
		@endsection
		