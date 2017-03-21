<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Atendimento extends Model
{

	// Mass Assignment

	protected $fillable = ['descricao', 'valor', 'carro_id'];

    // Relactionamento com Carros

    public function carro()
    {
    	return $this->belongsTo('App\Carro');
    }
}
