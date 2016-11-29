////////////////////////////////////////// Funções Gerais

// Formatar data vinda do banco de dados

function formatarData(data)
{
	// Elementos = Array com Ano, Mes, Dia

	 var elementos = data.split(" ")[0].split("-");

	 return elementos[2] + "/" + elementos[1] + "/ " + elementos[0][2]+elementos[0][3];
}

// Criar o bloco de resultados da busca da página inicial

function criarBloco(carro)
{

	// Obter o template
	
	var template = $("script#resultado-busca").html();

	// Compilar o template

	var compilar = Handlebars.compile(template);

	// Formatar a data de cada atendimento vinda do banco de dados

	for (var i = carro.atendimentos.length - 1; i >= 0; i--) {

		// Criar a propriedade "criado", apenas para exibição, com o valor retornado
		// da função formatarData()
		
		carro.atendimentos[i].criado = formatarData(carro.atendimentos[i].created_at);

	}

	// Jogar os dados no template

	var html = compilar(carro);

	// Retornar o HTML gerado;

	return html;
}

///////////////////////////////////////////////////////// Funções executadas após o carregamento da página

$(function(){

	// Busca via Ajax dos carros por placa.
	// Busca principal do Site

	$("button#btn_busca").click(function(){

		// Obter o termo de busca

		var termo = $("input#busca").val();

		// Obter o token CSRF (medida de segurança do Laravel)

		var token = $("input[name=_token").val();

		// Limpar a tela dos resultados anteriores

		$("div.row.resultados").empty();

		// Mostrar imagem de Loading

		$("img#img-loading").css('display', 'block');

		///////////////////////////////////////////// Request Ajax

		$.post('/busca', { termo : termo, _token : token }, function(data){

			// Converter o resultado em um objeto JSON

			var resultado = JSON.parse(data);

			// Apagar a imagem de Loading e a pasta vazia

			$("img#img-loading, div.vazio").css('display', 'none');

			// Testar se houve algum resultado para a pesquisa

			if(resultado.length > 0)
			{
				// Iterar pelos resultados e montar os blocos

				for (var i = resultado.length - 1; i >= 0; i--) {
					
					// Chamar a função que cria o bloco para cada resultado

					$("div.row.resultados").append(criarBloco(resultado[i]));

				}
			}
			else
			{
				$("div.vazio").css('display', 'block');
			}

		});

	});

	//////////////// Ativar a busca ao apertar ENTER no input de busca

	$("input#busca").keyup(function(event){
	    if(event.keyCode == 13){
	        $("button#btn_busca").click();
	    }
	});

});