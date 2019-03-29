<?php
 namespace App;
 use Illuminate\Database\Eloquent\Model;

    class Alumnos extends Model{
        use SoftDeletes;

        protected $primaryKey = 'IdMatricula';
        protected $fillable = ['IdMatricula','Nombre','APaterno','AMaterno','Edad','Sexo','FechaNac','Celular','TelFijo',
                                'Email','Calle','NumInt','NumExt','CodigoPostal','Estado','IdMun','IdLoc','Curp',
                                'ActNacimiento','FolioAsignado','SecProcedencia','CertificadoSec','NombrePadre','APPadre',
                                'AMPadre','CelularPadre','NombreMadre','APMadre','AMMadre','CelularMadre'];
    
        protected $data = ['deleted_at'];
    }