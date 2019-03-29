<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Planeaciones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('planeaciones', function (Blueprint $table) {
            $table->increments('IdPlane');
            
            $table->integer('IdCurso')->unsigned();
            $table->foreign('IdCurso')->references('IdCurso')->on('cursos');

            $table->string('Archivo',100);
        
            $table->rememberToken();
            $table->timestamps();
            $table->SoftDeletes();
        
        });
    }

    public function down(){
        Schema::drop('planeaciones');
    }
}
