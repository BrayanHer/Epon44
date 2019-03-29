<?php
 namespace App;
 use Illuminate\Database\Eloquent\Model;

    class ListasGrupos extends Model{
        use SoftDeletes;

        protected $primaryKey = 'IdLGrup';
        protected $fillable = ['IdLGrup','IdAEs','Archivo'];

        protected $data = ['deleted_at'];
    }
