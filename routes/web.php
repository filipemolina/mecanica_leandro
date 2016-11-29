<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

///////////////////////////////////////////////////// Rotas Gerais

Route::get('/', function () {

	// Obter todos os carros e atendimentos cadastrados

	$carros = \App\Carro::all();

	// Chamar a view principal enviando as informações

    return view('principal', compact('carros'));

    // Proteger essa rota, permitindo apenas o acesso de usuários logados
    
})->middleware('auth');

// Busca Ajax

Route::post('busca', 'BuscaController@index')->middleware('auth');

/////////////////////////////////////////////////////// Registro das Resourceful Routes

Route::resource('carros', "CarrosController");
Route::resource('atendimentos', 'AtendimentosController');

/////////////////////////////////////////////////////// Autenticação (Gerado Automaticamente)

Auth::routes();

Route::get('/home', 'HomeController@index');
