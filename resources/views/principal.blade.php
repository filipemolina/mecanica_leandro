@extends('layouts.gentellela')

@section('title')

Home

@endsection

{{-- Header H1 da Página --}}

@section('header-h1')

Início

@endsection

{{-- Menu Superior --}}

@section('menu-superior')

{{-- Busca --}}

<div class="nav navbar-nav navbar-left top_search col-md-8" style="margin-top: 15px;">
	<div class="input-group">
		<input id="busca" class="form-control" placeholder="Busca por placa" type="text" style="text-transform: uppercase">
		{{ csrf_field() }}
		<span class="input-group-btn">
			<button id="btn_busca" class="btn btn-default" type="button">Buscar!</button>
		</span>
	</div>
</div>

{{-- /Busca --}}

<div class="nav navbar-nav btn-novo-carro">
	<div class="input-group">
		<a href="{{ url('/carros/create') }}" class="btn btn-info">Cadastrar Carro</a>
	</div>
</div>

@endsection

{{-- Conteúdo Principal da Página --}}

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