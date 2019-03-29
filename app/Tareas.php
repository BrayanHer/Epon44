<?php
 namespace App;
 use Illuminate\Database\Eloquent\Model;

    class Tareas extends Model{
        protected $primaryKey = 'IdTarea';
        protected $fillable = ['IdTarea','IdHTF','Tema','Descripcion','IdCurso'];

        protected $data = ['deleted_at'];
    }
