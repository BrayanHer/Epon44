<?php
 namespace App;
 use Illuminate\Database\Eloquent\Model;

    class Usuarios extends Model{
        protected $primaryKey = 'idu';
        protected $fillable = ['idu','nombre','correo','usuario','password','tipo','Registro'];

        protected $data = ['deleted_at'];
    }
