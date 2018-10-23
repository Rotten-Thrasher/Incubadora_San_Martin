<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TipoHuevo extends Migration
{
   
    public function up()
    {
       Schema::create('tipo_huevo', function (Blueprint $table){
         $table->increments('id_especie');
           $table->string('nom_ave',20);
           $table->integer('dias_incu');
           $table->string('vacuna',5);
           $table->float('precio');
           $table->rememberToken();
           $table->timestamps();
       });
    }

  
    public function down()
    {
        Schema::drop('tipo_huevo');
    }
}
