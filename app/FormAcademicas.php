<?php
 namespace App;
 use Illuminate\Database\Eloquent\Model;

    class FormAcademicas extends Model{
        use SoftDeletes;

        protected $primaryKey = 'IdFAc';
        protected $fillable = ['IdFAc','IdAlumno','IdAEs'];

        protected $data = ['deleted_at'];
    }
