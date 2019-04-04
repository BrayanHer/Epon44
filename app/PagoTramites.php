<?php
 namespace App;
 use Illuminate\Database\Eloquent\Model;
 use Illuminate\Database\Eloquent\SoftDeletes;

    class PagoTramites extends Model{
        use SoftDeletes;

        protected $primaryKey = 'IdPTra';
        protected $fillable = ['IdPTra','IdAlumno','IdTramite','IdAEs','Fecha','Fotos','Baucher'];

        protected $data = ['deleted_at'];
    }
