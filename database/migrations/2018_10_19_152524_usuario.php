<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Usuario extends Migration
{
   
    public function up()
    {
        Schema::create ('usuario', function (Blueprint $table ){
            $table->increments('id_usu');
            $table->string('nom_usu',15);
            $table->string('ape_pat_usu',30);
            $table->string('ape_mat_usu',30);
            $table->integer('tel_usu');
            $table->string('email_usu',20);
            $table->rememberToken();
            $table->timestamps();
        });
    }

   
    public function down()
    {
     Schema::drop('usuario');
    }
}
