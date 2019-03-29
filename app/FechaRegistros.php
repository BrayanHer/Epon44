<?php
 namespace App;
 use Illuminate\Database\Eloquent\Model;

    class FechaRegistros extends Model{
        use SoftDeletes;

        protected $primaryKey = 'IdFRIR';
        protected $fillable = ['IdFRIR','LApellido','Fecha'];

        protected $data = ['deleted_at'];
    }
