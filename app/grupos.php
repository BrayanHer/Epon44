<?php
 namespace App;
 use Illuminate\Database\Eloquent\Model;
 use Illuminate\Database\Eloquent\SoftDeletes;

    class Grupos extends Model{
        use SoftDeletes;

        protected $primaryKey = 'IdGrupo';
        protected $fillable = ['IdGrupo','Grupo'];

        protected $data = ['deleted_at'];
    }
