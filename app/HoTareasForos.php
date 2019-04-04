<?php
 namespace App;
 use Illuminate\Database\Eloquent\Model;
 use Illuminate\Database\Eloquent\SoftDeletes;

    class HoTareasForos extends Model{
        use SoftDeletes;

        protected $primaryKey = 'IdHTF';
        protected $fillable = ['IdHTF','FechaHoraInicio','FechaHoraFin'];

        protected $data = ['deleted_at'];
    }
