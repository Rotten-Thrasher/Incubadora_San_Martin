<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DiaCarga extends Migration
{
   
    public function up()
    {
        Schema::create('dia_carga', function (Blueprint $table){
           $table->increments('id_dia');
            $table->string('dia',10);
            $table->timestamps();
        });
    }

    public function down()
    {
     Schema::drop('dia_carga');
    }
}
