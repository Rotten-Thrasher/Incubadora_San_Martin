<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TipoCliente extends Migration
{
    
    public function up()
    {
          Schema::create('tipo_cliente',function (Blueprint $table){
            $table->increments('id_tipo');
            $table->string('nom_tipo',15);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop ('tipo_cliente');
    }
}
