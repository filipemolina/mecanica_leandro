<?php

namespace App\Http\Controllers;

use App\Atendimento;
use Illuminate\Http\Request;

class AtendimentosController extends Controller
{

    protected $mensagens = [
        'required' => 'O campo :attribute é obrigatório'
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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validação

        $this->validate($request, [
            'descricao' => 'required',
            'carro_id' => 'required'
        ], $this->mensagens);

        // Verificar se o valor está presente

        if(!$request->valor)
            $request->merge(['valor' => 0]);

        // Criar um novo atendimento

        $atendimento = new Atendimento($request->all());
        $atendimento->save();

        // Retornar sem nenhum erro

        echo json_encode([ 0 => 'sucesso']);
        
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
