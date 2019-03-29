<?php
 namespace App;
 use Illuminate\Database\Eloquent\Model;

    class TareasEntregadas extends Model{
        protected $primaryKey = 'IdTEnt';
        protected $fillable = ['IdTEnt','IdTarea','IdAlumno','Archivo','Calificacion'];

        protected $data = ['deleted_at'];
    }
