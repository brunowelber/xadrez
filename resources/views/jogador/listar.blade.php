@extends('template',['title'=>"Inicie seu jogo"])
@section('conteudo')
		<h2>Lista de jogadores</h2>
<p class="text-center"><a href="{{ route("jogador.create") }}" title="Novo jogador">Cadastrar Jogador</a></p>
		<ul class="list-unstyled">
		@forelse($jogadores as $jogador)
		<li><a href="{{ route("jogador.show",[$jogador->id]) }}" title="Veja detalhes sobre esse jogador">{{ $jogador->nome }}</a></li>
		@empty
		<li>Não existem jogadores cadastrados</li>
		@endforelse
		</ul>
		@endsection
		