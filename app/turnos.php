<?php
 namespace App;
 use Illuminate\Database\Eloquent\Model;
 use Illuminate\Database\Eloquent\SoftDeletes;

    class Turnos extends Model{
        protected $primaryKey = 'IdTurno';
        protected $fillable = ['IdTurno','Turno'];

        protected $data = ['deleted_at'];
    }
