<?php
 namespace App;
 use Illuminate\Database\Eloquent\Model;
 use Illuminate\Database\Eloquent\SoftDeletes;

    class AreaTalleres extends Model{
        use SoftDeletes;

        protected $primaryKey = 'IdATaller';
        protected $fillable = ['IdATaller','AreaTaller'];

        protected $data = ['deleted_at'];
    }
