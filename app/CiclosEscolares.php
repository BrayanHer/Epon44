<?php
 namespace App;
 use Illuminate\Database\Eloquent\Model;

    class CiclosEscolares extends Model{
        use SoftDeletes;

        protected $primaryKey = 'IdCEs';
        protected $fillable = ['IdCEs','Ciclo Escolar'];

        protected $data = ['deleted_at'];
    }
