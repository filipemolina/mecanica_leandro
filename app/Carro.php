<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carro extends Model
{
    // Relacionamento com os atendimentos

    public function atendimentos()
    {
    	return $this->hasMany('App\Atendimento');
    }
}
