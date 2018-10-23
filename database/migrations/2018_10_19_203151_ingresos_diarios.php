<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class IngresosDiarios extends Migration
{
   
    public function up()
    {
        Schema::create('ingresos_diarios', function (Blueprint $table){
        $table->increments ('id_ing');
        $table->integer ('id_ticket')->unsigned();
        $table->float('total');
        $table->foreign('id_ticket')->references('id_ticket')->on('ticket');
        $table->rememberToken();
        $table->timestamps();
     });  
    }

   
    public function down()
    {
      Schema::drop('ingresos_diarios');
    }
}
