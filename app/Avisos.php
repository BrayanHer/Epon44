<?php
 namespace App;
 use Illuminate\Database\Eloquent\Model;
 use Illuminate\Database\Eloquent\SoftDeletes;

    class Avisos extends Model{
        use SoftDeletes;

        protected $primaryKey = 'IdAviso';
        protected $fillable = ['IdAviso','Imagen','Descripcion'];

        protected $data = ['deleted_at'];
    }
