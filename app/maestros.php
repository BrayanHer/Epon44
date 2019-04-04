<?php
 namespace App;
 use Illuminate\Database\Eloquent\Model;
 use Illuminate\Database\Eloquent\SoftDeletes;

    class Profesores extends Model{
        use SoftDeletes;

        protected $primaryKey = 'IdMaestro';
        protected $fillable = ['IdMaestro','Matricula','NombreM','APaterno','AMaterno','Correo','Telefono'];

        protected $data = ['deleted_at'];
}
