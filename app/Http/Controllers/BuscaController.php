<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BuscaController extends Controller
{
    // Busca pela placa

    public function index(Request $request)
    {

    	$termo = strtoupper($request->input('termo'));

    	// Testar se o termo de busca veio vazio, caso afirmativo
    	// retornar uma lista de todos os últimos carros

    	if($termo != "")
    	{

    		// Obter os carros, com os atendimentos ordenados por ordem decrescente de criação

    		$carros = \App\Carro::where('placa', '=', $termo)->with(['atendimentos' => function($query){
				
				$query->orderBy('id', 'desc')->take(5);

    		}])->get();

	    	foreach($carros as $carro)
	    	{
	    		$carro->criado = $carro->created_at->format('d/n/y');
	    	}

	    	return $carros->toJson();
    	}
    	else
    	{

    		// Obter os carros, com os atendimentos ordenados por ordem decrescente de criação

    		$carros = \App\Carro::orderBy('id', 'desc')->with(['atendimentos' => function($query){
				
				$query->orderBy('id', 'desc')->take(5);

    		}])->take(10)->get();

    		return $carros->toJson();
    	}

    }
}
