<?php
 namespace App;
 use Illuminate\Database\Eloquent\Model;

    class RegistroForos extends Model{
        use SoftDeletes;

        protected $primaryKey = 'IdRForo';
        protected $fillable = ['IdRForo','IdTForo','Archivo'];

        protected $data = ['deleted_at'];
    }
