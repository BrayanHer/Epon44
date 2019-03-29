<?php
 namespace App;
 use Illuminate\Database\Eloquent\Model;

    class Avisos extends Model{
        use SoftDeletes;

        protected $primaryKey = 'IdAviso';
        protected $fillable = ['IdAviso','Imagen','Descripcion'];

        protected $data = ['deleted_at'];
    }
