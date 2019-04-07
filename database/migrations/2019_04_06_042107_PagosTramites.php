<?php
 use Illuminate\Database\Schema\Blueprint;
 use Illuminate\Database\Migrations\Migration;

    class PagosTramites extends Migration{
        public function up(){
            Schema::create('pagoTramites', function (Blueprint $table) {
                $table->increments('IdPTra');

                $table->integer('IdAlumno')->unsigned();
                $table->foreign('IdAlumno')->references('IdAlumno')->on('alumnos');        

                $table->integer('IdTramite')->unsigned();
                $table->foreign('IdTramite')->references('IdTramite')->on('tramites');
                
                $table->integer('IdAEs')->unsigned();
                $table->foreign('IdAEs')->references('IdAEs')->on('anEscolares');

                $table->date('Fecha');
                $table->string('Fotos',100);
                $table->string('Baucher',15);

                $table->rememberToken();
                $table->timestamps();
                $table->SoftDeletes();
            });
        }

        public function down(){
            Schema::drop('pagoTramites');
        }
    }
