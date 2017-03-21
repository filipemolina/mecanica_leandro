<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carro extends Model
{

	protected $fillable = ['placa', 'modelo', 'cor', 'proprietario'];
	
    // Relacionamento com os atendimentos

    public function atendimentos()
    {
    	return $this->hasMany('App\Atendimento');
    }
}
