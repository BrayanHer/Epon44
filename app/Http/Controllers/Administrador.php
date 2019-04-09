<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\usuarios;
use Session;
class Administrador extends Controller
{
    public function C_Usuarios(){
$Usuarios = usuarios::withTrashed()->orderBy('idu', 'asc')->get();

            if(Session::get('sesionidu')!="")
                    return view ("V_admin.C_Usuarios")
                                ->with('Usuarios', $Usuarios);
            else{
     Session::flash('error', 'Debe iniciar sesion');
                    return redirect()->route('login');
                     }   
    }

    //Eliminación Lógica
    public function ElUsuario($idu){
        usuarios::find($idu)->delete();

        return redirect()->back();
    }

//Activación
    public function ActUsuario($idu){
        usuarios::withTrashed()->where('idu',$idu)->restore();

        return redirect()->back();
    }

//Eliminación Física
    public function EFUsuario($idu){
        usuarios::withTrashed()->where('idu',$idu)->forceDelete();
        
        return redirect()->back();
    }
    
}
