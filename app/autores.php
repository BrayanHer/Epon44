<?php
 namespace App;
 use Illuminate\Database\Eloquent\Model;

    class Autores extends Model{
        use SoftDeletes;

        protected $primaryKey = 'IdAutor';
        protected $fillable = ['IdAutor','Nombre','APaterno','AMaterno'];

        protected $data = ['deleted_at'];
    }
