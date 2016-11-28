@extends('layouts.app')

@section('conteudo')

	<ul>

	@foreach($carros as $carro)

		<li>{{ $carro->modelo }}</li>

		<li><ul>
			
			@foreach($carro->atendimentos as $atendimento)

				<li>{{ $atendimento->descricao }}</li>

			@endforeach

		</ul></li>

	@endforeach

	</ul>

@endsection