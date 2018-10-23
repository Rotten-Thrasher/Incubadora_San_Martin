<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Ticket extends Migration
{
   
    public function up()
    {
     Schema::create('ticket', function (Blueprint $table){
        $table->increments ('id_ticket');
        $table->integer ('id_lote')->unsigned();
        $table->integer('cant_huevo');
        $table->float('precio_pago');
        $table->foreign('id_lote')->references('id_lote')->on('lote');
          $table->rememberToken();
        $table->timestamps();
     });  
    }

   
    public function down()
    {
       Schema::drop('ticket');
    }
}
