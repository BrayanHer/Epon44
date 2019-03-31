<?php
 use Illuminate\Database\Schema\Blueprint;
 use Illuminate\Database\Migrations\Migration;

    class Tareas extends Migration{
        public function up(){
            Schema::create('tareas', function(Blueprint $table) {
                $table->increments('IdTarea');

                $table->integer('IdHTF')->unsigned();
                $table->foreign('IdHTF')->references('IdHTF')->on('hTareasForos');

                $table->string('Tema',100);
                $table->string('Descripcion',400);

                $table->integer('IdCurso')->unsigned();
                $table->foreign('IdCurso')->references('IdCurso')->on('cursos');

                $table->rememberToken();
                $table->timestamps(); 
                $table->SoftDeletes();
            });
        }

        public function down(){
            Schema::drop('tareas');
        }
    }
