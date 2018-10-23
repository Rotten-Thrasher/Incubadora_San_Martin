<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Incubadora extends Migration
{
   
    public function up()
    {
        Schema::create('incubadora', function (Blueprint $table){
            $table->increments('id_incubadora');
            $table->integer('capacidad');
            $table->integer('niveles');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::drop('incubadora');
    }
}
