<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Atendimento extends Model
{
    // Relactionamento com Carros

    public function carro()
    {
    	return $this->belongsTo('App\Carro');
    }
}
