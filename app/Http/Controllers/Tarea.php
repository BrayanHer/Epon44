<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\tareas;
use App\hTareasForos;
use App\Cursos;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class Tarea extends Controller
{
    public function TareasD(){
        $clavequesigueA = tareas::withTrashed()->orderBy('IdTarea', 'desc')
        ->take(1)
        ->get();

            if(count($clavequesigueA)==0){
                $IdTarea = 1;
            }
            else{
                $IdTarea = $clavequesigueA[0]->IdTarea + 1;
            }

            if(Session::get('sesionidu')!="")
            
            return view('Maestros.Tareas')
            ->with('IdTarea',$IdTarea);
                    else{
                        Session::flash('error', 'Debe iniciar sesion');
                        return redirect()->route('login');
                    }

    }
}
