<?php

namespace App\Http\Controllers;

use App\Carro;
use Illuminate\Http\Request;

class CarrosController extends Controller
{
    // Mensagens de erro personalizadas

    private $mensagens = [

        'required' => 'O campo :attribute é obrigatório.',
        'unique'   => 'O campo :attribute já existe no banco de dados.',
        'size'      => 'O campo :attribute deve ter exatamente 8 caracteres'

    ];

    // Construtor

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Obter todos os carros

        $carros = \App\Carro::all();

        return view('carros.index', compact('carros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('carros.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validar os dados

        $this->validate($request, [

            'placa' => 'required|unique:carros|size:8',
            'proprietario' => 'required'

        ], $this->mensagens);

        // Criar um novo carro

        $carro = new Carro($request->all());

        $carro->save();

        echo json_encode($carro->toJson());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
