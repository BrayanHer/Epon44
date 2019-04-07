<?php
 namespace App;

 use Illuminate\Database\Eloquent\Model;
 use Illuminate\Database\Eloquent\SoftDeletes;

    class listasGrupos extends Model{
        use SoftDeletes;

        protected $table = 'listasGrupos';
        protected $primaryKey = 'IdLGrup';
        protected $fillable = ['IdLGrup','IdAEs','Archivo'];

        protected $data = ['deleted_at'];
    }
