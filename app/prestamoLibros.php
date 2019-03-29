<?php
 namespace App;
 use Illuminate\Database\Eloquent\Model;

    class PrestamoLibros extends Model{
        use SoftDeletes;

        protected $primaryKey = 'IdPrestamo';
        protected $fillable = ['IdPrestamo','IdAlumno','IdLibro','FechaPrestamo','FechaEntrega'];

        protected $data = ['deleted_at'];
    }
