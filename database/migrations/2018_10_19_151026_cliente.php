<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Cliente extends Migration
{
   
    public function up()
    {
      Schema::create('cliente',function (Blueprint $table){
          $table->increments ('id_cli');
          $table->string('nom_cli',20);
          $table->string('ape_pat_cli',30);
          $table->string('ape_mat_cli',30);
          $table->integer('tel_cli');
          $table->string('email_cli',30);
          $table->string('direc_cli',50);
          $table->string('edo_cli',50);
          $table->string('mun_cli',50);
          $table->integer('id_tipo')->unsigned();
          $table->foreign('id_tipo')->references('id_tipo')->on('tipo_cliente');
          $table->rememberToken();
          $table->timestamps();
      }); 
    }


    public function down()
    {
        Schema::drop('cliente');
    }
}
