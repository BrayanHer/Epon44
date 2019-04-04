<?php
 namespace App;
 use Illuminate\Database\Eloquent\Model;
 use Illuminate\Database\Eloquent\SoftDeletes;

    class Tramites extends Model{
        protected $primaryKey = 'IdTramite';
        protected $fillable = ['IdTramite','Tramite'];

        protected $data = ['deleted_at'];
    }
