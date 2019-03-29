<?php
 namespace App;
 use Illuminate\Database\Eloquent\Model;

    class Municipios extends Model{
        use SoftDeletes;

        protected $primaryKey = 'IdMun';
        protected $fillable = ['IdMun','Municipios'];

        protected $data = ['deleted_at'];
    }
