<?php
 namespace App;
 use Illuminate\Database\Eloquent\Model;

    class Editoriales extends Model{
        use SoftDeletes;

        protected $primaryKey = 'IdEditorial';
        protected $fillable = ['IdEditorial','Editorial'];

        protected $data = ['deleted_at'];
    }
