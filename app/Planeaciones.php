<?php
 namespace App;
 use Illuminate\Database\Eloquent\Model;

    class Planeaciones extends Model{
        use SoftDeletes;

        protected $primaryKey = 'IdPlane';
        protected $fillable = ['IdPlane','IdCurso','Archivo'];

        protected $data = ['deleted_at'];
    }
