<?php
 namespace App;
 use Illuminate\Database\Eloquent\Model;
 use Illuminate\Database\Eloquent\SoftDeletes;

    class Periodos extends Model{
        use SoftDeletes;

        protected $primaryKey = 'IdPeriodo';
        protected $fillable = ['IdPeriodo','Periodo'];

        protected $data = ['deleted_at'];
    }
