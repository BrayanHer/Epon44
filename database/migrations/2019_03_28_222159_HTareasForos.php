<?php
 use Illuminate\Database\Schema\Blueprint;
 use Illuminate\Database\Migrations\Migration;

    class HTareasForos extends Migration{
        public function up(){
            Schema::create('hTareasForos', function (Blueprint $table) {
                $table->increments('IdHTF');
                $table->dateTime('FechaHoraInicio');
                $table->dateTime('FechaHoraFin');
                
                $table->rememberToken();
                $table->timestamps();
                $table->SoftDeletes();
            });
        }

        public function down(){
            Schema::drop('hTareasForos');
        }
    }