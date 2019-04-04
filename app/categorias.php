<?php
 namespace App;
 use Illuminate\Database\Eloquent\Model;
 use Illuminate\Database\Eloquent\SoftDeletes;

    class Categorias extends Model{
        use SoftDeletes;

        protected $primaryKey = 'IdCategoria';
        protected $fillable = ['IdCategoria','Categoria'];

        protected $data = ['deleted_at'];
    }
