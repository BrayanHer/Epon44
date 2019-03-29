<?php
 namespace App;
 use Illuminate\Database\Eloquent\Model;

    class Tramites extends Model{
        protected $primaryKey = 'IdTramite';
        protected $fillable = ['IdTramite','Tramite'];

        protected $data = ['deleted_at'];
    }
