<?php

namespace App\Http\Controllers;

use App\Cursos;
use App\Http\Controllers\Controller;
use App\Materias;
use App\tareas;
use Illuminate\Http\Request;
use Session;

class Tarea extends Controller
{
    public function TareasD()
    {
        $clavequesigueA = tareas::withTrashed()->orderBy('IdTarea', 'desc')
            ->take(1)
            ->get();

        if (count($clavequesigueA) == 0) {
            $IdTarea = 1;
        } else {
            $IdTarea = $clavequesigueA[0]->IdTarea + 1;
        }

        $Cursos = Cursos::withTrashed()->orderBy('IdMateria', 'asc')->get();
        $Materia = Materias::withTrashed()->orderBy('IdMateria', 'asc') //withTrashed -> todos ->eliminados (lógico) o no
            ->get();

        if (Session::get('sesionidu') != "") {
            return view('Maestros.Tareas')
                ->with('Cursos', $Cursos)
                ->with('Materia', $Materia)
                ->with('IdTarea', $IdTarea);
        } else {
            Session::flash('error', 'Debe iniciar sesion');
            return redirect()->route('login');
        }

    }
    public function Gtarea(Request $request)
    {
        // _________________Obtenemos datos_______________________

        $IdTarea = $request->IdTarea;
        $Tema = $request->Tema;
        $Descripción = $request->Descripción;
        $FechaHoraInicio = $request->FechaInicio . '  ' . $request->HoraInicio;
        $FechaHoraFin = $request->FechaEntrega . '  ' . $request->HoraEntrega;
        $Descripción = $request->Descripción;
        $IdCurso = $request->SelGrupo;
        $TipoTarea = $request->TipoTarea;

        // dd($I 

        for ($n=0; $n < count($IdCurso); $n++)
         {
                $Tarea = new tareas;
                $Tarea->IdTarea = $request->IdTarea+1;
                $Tarea->Tema = $request->Tema;
                $Tarea->Descripcion = $request->Descripción;
                $Tarea->FechaHoraInicio = $FechaHoraInicio;
                $Tarea->FechaHoraFin = $FechaHoraFin;
                $Tarea->IdCurso = $arreglo;
                $Tarea->TipoTarea = $request->TipoTarea;
                $Tarea->save();
           
            return redirect()->back();
        }

 
    }
}
