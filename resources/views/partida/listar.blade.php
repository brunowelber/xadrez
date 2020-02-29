@extends('template',['title'=>"Partidas"])
@section('conteudo')
		<h2>Lista de partidas</h2>
<p class="text-center"><a href="{{ route("partida.create") }}" title="Nova partida">Cadastrar Partida</a></p>
		<ul class="list-unstyled">
		@forelse($partidas as $partida)
		<li><a href="{{ route("partida.show",[$partida->id]) }}" title="Veja detalhes sobre essa partida">{{ $partida->local }} - {{ $partida->data }}</a></li>
		@empty
		<li>Não existem partidas cadastradas</li>
		@endforelse
		</ul>
		@endsection
		