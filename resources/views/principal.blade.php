@extends('layouts.gentellela')

@section('conteudo')

	<div class="row resultados">

		{{-- *********************** Início do Loop --}}
		
		@foreach($carros as $carro)

			{{-- Painel --}}

			<div class="col-md-12 x_panel">

				{{-- Título --}}

				<div class="x_title">

					<h2>{{ $carro->modelo }} | {{ $carro->placa }}</h2>

					<div class="clearfix"></div>

				</div>

				{{-- Conteúdo --}}

				<div class="x_content">

					{{-- Informações do Carro --}}

					<div class="col-md-4">
						<strong>Placa:</strong> {{ $carro->placa }}
						<br>
						<strong>Modelo:</strong> {{ $carro->modelo }}
						<br>
						<strong>Cor:</strong> {{ $carro->cor }}
						<br>
						<strong>Proprietário:</strong> {{ $carro->proprietario }}
						<br>
					</div>

					{{-- Histórico dos Atendimentos --}}

					<div class="col-md-8">
						
						<ul class="list-unstyled timeline">

							@foreach($carro->atendimentos as $atendimento)

								<li>
									<div class="block">
										<div class="tags">
											<a href="" class="tag">
												<span>{{ $atendimento->created_at->format('d/n/y') }}</span>
											</a>
										</div>
										<div class="block_content">
											<h2 class="title">
												<a href="javascript:void(0)">Serviços Prestados</a>
											</h2>
											<div class="byline">
												<span>{{ $atendimento->created_at->format('d/n/y') }}</span> by <a>Jane Smith</a>
											</div>
											<p class="excerpt">{{ $atendimento->descricao }}</p>
											<p><strong>Valor:</strong> R$ {{ $atendimento->valor }}</p>
										</div>
									</div>
								</li>

							@endforeach

						</ul>

					</div>

				</div>
				
			</div>

		@endforeach

		{{-- *********************** Fim do Loop --}}

	</div>

@endsection