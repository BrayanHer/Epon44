<?php
 namespace App;
 use Illuminate\Database\Eloquent\Model;

    class AreaTalleres extends Model{
        use SoftDeletes;

        protected $primaryKey = 'IdATaller';
        protected $fillable = ['IdATaller','AreaTaller'];

        protected $data = ['deleted_at'];
    }
