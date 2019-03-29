<?php
 namespace App;
 use Illuminate\Database\Eloquent\Model;

    class AnEscolares extends Model{
        use SoftDeletes;

        protected $primaryKey = 'IdAEs';
        protected $fillable = ['IdAEs','IdCEs','IdTurno','IdPeriodo','IdGrupo'];
    
        protected $data = ['deleted_at'];
    }
