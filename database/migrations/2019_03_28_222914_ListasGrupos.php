<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ListasGrupos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listasGrupos', function (Blueprint $table) {
            $table->increments('IdLGrup');
            
            $table->integer('IdAEs')->unsigned();
            $table->foreign('IdAEs')->references('IdAEs')->on('anEscolares');

            $table->string('Archivo',100);

            $table->rememberToken();
            $table->timestamps();
            $table->SoftDeletes();
        });
    }

    public function down(){
        Schema::drop('listasGrupos');
    }
}
