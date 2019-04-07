<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tareascheck extends Model
{
    protected $table = 'tareascheck';
        protected $primaryKey = 'idTac';
        protected $fillable = ['idTac','Contenido'];

}
