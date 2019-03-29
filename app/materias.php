<?php
 namespace App;
 use Illuminate\Database\Eloquent\Model;

    class Materias extends Model{
        use SoftDeletes;

        protected $primaryKey = 'IdMateria';
        protected $fillable = ['IdMateria','Materia'];

        protected $data = ['deleted_at'];
    }
