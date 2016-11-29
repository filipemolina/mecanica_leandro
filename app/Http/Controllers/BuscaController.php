<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BuscaController extends Controller
{
    // Busca pela placa

    public function index(Request $request)
    {

    	$termo = $request->input('termo');

    	$carros = \App\Carro::where('placa', '=', $termo)->with('atendimentos')->get();

    	foreach($carros as $carro)
    	{
    		$carro->criado = $carro->created_at->format('d/n/y');
    	}

    	return $carros->toJson();

    	// echo "<pre>";
    	// print_r(json_encode($carros));

    }
}
