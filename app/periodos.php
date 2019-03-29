<?php
 namespace App;
 use Illuminate\Database\Eloquent\Model;

    class Periodos extends Model{
        use SoftDeletes;

        protected $primaryKey = 'IdPeriodo';
        protected $fillable = ['IdPeriodo','Periodo'];

        protected $data = ['deleted_at'];
    }
