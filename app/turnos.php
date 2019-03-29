<?php
 namespace App;
 use Illuminate\Database\Eloquent\Model;

    class Turnos extends Model{
        protected $primaryKey = 'IdTurno';
        protected $fillable = ['IdTurno','Turno'];

        protected $data = ['deleted_at'];
    }
