<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAtendimentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atendimentos', function (Blueprint $table) {
            $table->increments('id');
            
            // Atributos principais
            $table->integer('carro_id')->unsigned();
            $table->text('descricao')->nullable();
            $table->float('valor', 8, 2)->nullable();
            $table->date('data_saida')->nullable();
            
            // Chave Estrangeira
            $table->foreign('carro_id')->references('id')->on('carros');

            // Datas
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('atendimentos');
    }
}
