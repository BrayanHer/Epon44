<?php
 namespace App;

 use Illuminate\Database\Eloquent\Model;
 use Illuminate\Database\Eloquent\SoftDeletes;

    class anEscolares extends Model{
        use SoftDeletes;

        protected $table = 'anEscolares';
        protected $primaryKey = 'IdAEs';
        protected $fillable = ['IdAEs','IdCEs','IdTurno','IdPeriodo','IdGrupo'];
    
        protected $data = ['deleted_at'];
    }
