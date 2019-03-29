<?php
 namespace App;
 use Illuminate\Database\Eloquent\Model;

    class TemaForos extends Model{
        protected $primaryKey = 'IdTForo';
        protected $fillable = ['IdTForo','Tema','Descripcion','Archivo','IdCurso'];

        protected $data = ['deleted_at'];
}
