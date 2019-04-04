<?php
 namespace App;
 use Illuminate\Database\Eloquent\Model;
 use Illuminate\Database\Eloquent\SoftDeletes;

    class TipoBajas extends Model{
        protected $primaryKey = 'IdTipoBaja';
        protected $fillable = ['IdTipoBaja','Tipo'];

        protected $data = ['deleted_at'];
    }
