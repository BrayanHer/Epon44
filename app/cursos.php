<?php
 namespace App;
 use Illuminate\Database\Eloquent\Model;
 use Illuminate\Database\Eloquent\SoftDeletes;

    class Cursos extends Model{
        use SoftDeletes;

        protected $primaryKey = 'IdCurso';
        protected $fillable = ['IdCurso','IdMateria','IdMaestro','IdAEs',];

        protected $data = ['deleted_at'];
    }
