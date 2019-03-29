<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FormAcademicas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formAcademicas', function (Blueprint $table) {
            $table->integer('IdFAc');

            
            $table->integer('IdAlumno')->unsigned();
            $table->foreign('IdAlumno')->references('IdAlumno')->on('alumnos');
            
            $table->integer('IdAEs')->unsigned();
            $table->foreign('IdAEs')->references('IdAEs')->on('anEscolares');

            $table->rememberToken();
            $table->timestamps();
            $table->SoftDeletes();
        });
    }

    public function down(){
        Schema::drop('formAcademicas');
    }
}
