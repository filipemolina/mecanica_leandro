////////////////////////////////////////// Funções Gerais

// Criar o bloco de resultados da busca da página inicial

function criarBloco(carro)
{

	// Obter o template
	
	var template = $("script#resultado-busca").html();

	// Compilar o template

	var compilar = Handlebars.compile(template);

	// Jogar os dados no template

	var html = compilar(carro);

	// Retornar o HTML gerado;

	return html;
}

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

			// Apagar a imagem de Loading

			$("img#img-loading").css('display', 'none');

			// Iterar pelos resultados e montar os blocos

			for (var i = resultado.length - 1; i >= 0; i--) {
				
				// Chamar a função que cria o bloco para cada resultado

				$("div.row.resultados").append(criarBloco(resultado[i]));

			}

		});

	});

});