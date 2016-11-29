@extends('layouts.gentellela')

@section('conteudo')

	<div class="row vazio">
			
		<i aria-hidden="true" class="fa fa-folder-open-o fa-5x" style="font-size: 17em"></i>

		<h3>Nenhum carro encontrado!</h3>

	</div>	

	<div class="row resultados">

		{{-- Mensagen inicial de busca --}}

		<div class="row inicial">
			
			<i aria-hidden="true" class="fa fa-search fa-5x" style="font-size: 17em"></i>

			<h3>Digite um número de placa para iniciar</h3>

		</div>	

	</div>

@endsection