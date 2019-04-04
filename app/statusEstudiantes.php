<?php
 namespace App;
 use Illuminate\Database\Eloquent\Model;
 use Illuminate\Database\Eloquent\SoftDeletes;

    class StatusEstudiantes extends Model{
        use SoftDeletes;

        protected $primaryKey = 'IdStatus';
        protected $fillable = ['IdStatus','IdAlumno','IdTipoBaja','FechaBaja','Observacion'];

        protected $data = ['deleted_at'];
    }
