<?php
 namespace App;
 use Illuminate\Database\Eloquent\Model;

    class Libros extends Model{
        use SoftDeletes;

        protected $primaryKey = 'IdLibro';
        protected $fillable = ['IdLibro','Titulo','IdAutor','IdEditorial','Edicion','AnioPublicacion','IdCategoria',
                                'Imagen','Existencia'];

        protected $data = ['deleted_at'];
    }
