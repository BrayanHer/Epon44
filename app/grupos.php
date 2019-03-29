<?php
 namespace App;
 use Illuminate\Database\Eloquent\Model;

    class Grupos extends Model{
        use SoftDeletes;

        protected $primaryKey = 'IdGrupo';
        protected $fillable = ['IdGrupo','Grupo'];

        protected $data = ['deleted_at'];
    }
