<?php
 namespace App;
 use Illuminate\Database\Eloquent\Model;

    class TipoBajas extends Model{
        protected $primaryKey = 'IdTipoBaja';
        protected $fillable = ['IdTipoBaja','Tipo'];

        protected $data = ['deleted_at'];
    }
