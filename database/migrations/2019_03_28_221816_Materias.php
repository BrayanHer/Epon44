<?php
 use Illuminate\Database\Schema\Blueprint;
 use Illuminate\Database\Migrations\Migration;

    class Materias extends Migration{
        public function up(){
            Schema::create('materias', function (Blueprint $table) {
                $table->increments('IdMateria');
                $table->string('Materia',100);
                
                $table->rememberToken();
                $table->timestamps();
                $table->SoftDeletes();
            });
        }

        public function down(){
            Schema::drop('materias');
        }
    }