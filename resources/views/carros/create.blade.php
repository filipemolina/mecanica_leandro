@extends('layouts.gentellela')

@section('title')

Cadastrar Carro

@endsection

@section('conteudo')

	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">

			{{-- Titulo do formulário --}}
			
			<div class="x_title">
				<h2>Cadastrar Carro <small></small></h2>
				<ul class="nav navbar-right panel_toolbox">
					<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
				</ul>
				<div class="clearfix"></div>
			</div>
			
			{{-- Conteúdo do Formulário --}}
	
			<div class="x_content">
				<br>
				<form id="form-cadastrar-carro" data-parsley-validate="" class="form-ajax form-horizontal form-label-left" novalidate="" method="POST" action="{{ url('/carros') }}">
					
					{{ csrf_field() }}

					{{-- Placa --}}

					<input type="hidden" name="model" value="carro">

					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="placa">Placa <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input id="placa" name="placa" required="required" class="form-control col-md-7 col-xs-12" type="text" style="text-transform: uppercase;" data-inputmask="'mask' : 'aaa-9999'">
						</div>
					</div>

					{{-- Modelo --}}

					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="modelo">Modelo
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input id="modelo" name="modelo" class="form-control col-md-7 col-xs-12" type="text">
						</div>
					</div>

					{{-- Cor --}}

					<div class="form-group">
						<label for="cor" class="control-label col-md-3 col-sm-3 col-xs-12">Cor</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input id="cor" class="form-control col-md-7 col-xs-12" name="cor" type="text">
						</div>
					</div>

					{{-- Proprietário --}}

					<div class="form-group">
						<label for="proprietario" class="control-label col-md-3 col-sm-3 col-xs-12">Proprietario <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input id="proprietario" class="form-control col-md-7 col-xs-12" name="proprietario" type="text" required="required">
						</div>
					</div>

					<div class="ln_solid"></div>
					
					<div class="form-group">
						<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
							<button type="submit" class="btn btn-primary">Cancelar</button>
							<button type="submit" class="btn btn-success">Enviar</button>
						</div>
					</div>

				</form>

				{{-- Formulário para cadastrar o atendimento relacionado ao carro que acabou de ser cadastrado --}}
				
				<br>
				<form id="form-cadastrar-atendimento" data-parsley-validate="" class="form-ajax form-horizontal form-label-left hidden" novalidate="" method="POST" action="{{ url('/atendimentos') }}">

					{{ csrf_field() }}

					<input type="hidden" name="model" value="atendimento">
					<input type="hidden" name="carro_id" id="carro_id" value="">

					{{-- Descrição do atendimento --}}

					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="descricao">Descrição <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<textarea id="descricao" name="descricao" required="required" class="form-control col-md-7 col-xs-12"></textarea>
						</div>
					</div>

					{{-- Valor do Atendimento --}}

					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="valor">Valor
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<div class="input-group">
								<span class="input-group-addon">R$</span>
								<input id="valor" name="valor" class="form-control col-md-7 col-xs-12" type="text">
							</div>
						</div>
					</div>

					<div class="form-group">
						<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
							<button type="submit" class="btn btn-success">Enviar</button>
						</div>
					</div>

				</form>

				{{-- Mensagen inicial de busca --}}

				<div class="row final hidden">
					
					<i aria-hidden="true" class="fa fa-check fa-5x" style="font-size: 17em; text-align: center;"></i>

					<h3>Digite um número de placa para iniciar</h3>

				</div>	
			</div>
		</div>
	</div>

<script type="text/x-handlebars-template" id="alert">
	
	@verbatim

	<div class="alert alert-{{classe}} alert-dismissible fade in" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
		</button>
		<strong>{{titulo}}</strong> {{ mensagem }}
	</div>

	@endverbatim

</script>

@endsection