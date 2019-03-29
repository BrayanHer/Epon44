<?php
 namespace App;
 use Illuminate\Database\Eloquent\Model;

    class Localidades extends Model{
        use SoftDeletes;

        protected $primaryKey = 'IdLoc';
        protected $fillable = ['IdLoc','Localidad','IdMun'];

        protected $data = ['deleted_at'];
    }
