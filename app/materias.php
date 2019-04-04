<?php
 namespace App;
 use Illuminate\Database\Eloquent\Model;
 use Illuminate\Database\Eloquent\SoftDeletes;

    class Materias extends Model{
        use SoftDeletes;

        protected $primaryKey = 'IdMateria';
        protected $fillable = ['IdMateria','Materia','IdPeriodo'];

        protected $data = ['deleted_at'];
    }
