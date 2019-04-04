<?php
 namespace App;
 use Illuminate\Database\Eloquent\Model;
 use Illuminate\Database\Eloquent\SoftDeletes;

    class Editoriales extends Model{
        use SoftDeletes;

        protected $primaryKey = 'IdEditorial';
        protected $fillable = ['IdEditorial','Editorial'];

        protected $data = ['deleted_at'];
    }
