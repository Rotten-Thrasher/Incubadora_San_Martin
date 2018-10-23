<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TipoUsuario extends Migration
{
   
    public function up()
    {
    Schema::create('tipo_usuario', function (Blueprint $table){
        $table->increments('id_tipo_usu');
        $table->integer('id_usu')->unsigned();
        $table->string('contra_usu',20);
        $table->foreign('id_usu')->references('id_usu')->on('usuario');
        $table->rememberToken();
        $table->timestamps();
    });
    }

    public function down()
    {
        Schema::drop('tipo_usuario');
    }
}
