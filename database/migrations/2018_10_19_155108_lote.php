<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Lote extends Migration
{

    public function up()
    {
        Schema::create('lote', function (Blueprint $table){
                 $table->increments('id_lote');
                 $table->integer('id_usu')->unsigned();
                 $table->integer('id_cli')->unsigned();
                 $table->integer('id_especie')->unsigned();
                 $table->datetime('fecha_entrada');
                 $table->integer('id_dia')->unsigned();
                 $table->integer('id_incubadora')->unsigned();
                 $table->datetime('fecha_salida');
            
                 $table->foreign('id_usu')->references('id_usu')->on('usuario');
            
                $table->foreign('id_cli')->references('id_cli')->on('cliente');
            
                $table->foreign('id_especie')->references('id_especie')->on('tipo_huevo');
            
                $table->foreign('id_dia')->references('id_dia')->on('dia_carga');
            
                $table->foreign('id_incubadora')->references('id_incubadora')->on('incubadora');
                
             $table->rememberToken();
        $table->timestamps();

        });
    }

    
    public function down()
    {
        Schema::drop('lote');
    }
}
