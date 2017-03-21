@extends('layouts.gentellela')

@section('conteudo')

	<div class="col-md-12">
		<div class="x_panel">
			<div class="x_title">
				<h2>Lista de Carros</h2>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				<ul class="list-unstyled msg_list">

					@foreach($carros as $carro)
						
						<li>
							<a>
								<span class="image"></span>
								<span>
									<span class="bold">Nome do Carro</span>
									<span class="time">2 dias atrás<span class="clearfix"></span></span>
								</span>
								<span class="message">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore praesentium neque dolor labore quae est error amet. Accusantium voluptas repudiandae voluptatibus quos optio aliquid quasi placeat omnis ipsa quia, cum?
								</span>
							</a>
							<span class="clearfix"></span>
						</li>

					@endforeach

				</ul>
			</div>
		</div>
	</div>

{{--
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

--}}

@endsection