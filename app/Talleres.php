<?php
 namespace App;
 use Illuminate\Database\Eloquent\Model;

    class Talleres extends Model{
        use SoftDeletes;

        protected $primaryKey = 'IdTaller';
        protected $fillable = ['IdTaller','IdATaller','Descripcion','Imagen'];

        protected $data = ['deleted_at'];
    }
