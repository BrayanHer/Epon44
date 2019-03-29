<?php
 namespace App;
 use Illuminate\Database\Eloquent\Model;

    class Examenes extends Model{
        use SoftDeletes;

        protected $primaryKey = 'IdExam';
        protected $fillable = ['IdExam','IdCurso','Archivo'];

        protected $data = ['deleted_at'];
    }
