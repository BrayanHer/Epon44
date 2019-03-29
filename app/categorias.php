<?php
 namespace App;
 use Illuminate\Database\Eloquent\Model;

    class Categorias extends Model{
        use SoftDeletes;

        protected $primaryKey = 'IdCategoria';
        protected $fillable = ['IdCategoria','Categoria'];

        protected $data = ['deleted_at'];
    }
