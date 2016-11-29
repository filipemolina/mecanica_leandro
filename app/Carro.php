<?php

namespace App;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;

class Carro extends Model
{

	// Trait para realizar a busca via Scout

	use Searchable;

    // Relacionamento com os atendimentos

    public function atendimentos()
    {
    	return $this->hasMany('App\Atendimento');
    }
}
