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

        $Usuario = Session::get('sesionuser');
        $Cursos = \DB::SELECT("SELECT c.IdCurso, g.Grupo, ma.Matricula
        FROM cursos AS c
                                            INNER JOIN maestros AS ma ON ma.IdMaestro = c.IdMaestro
                                            INNER JOIN planeaciones AS e
                                            INNER JOIN grupos AS g ON g.IdGrupo  = c.IdGrupo 
                                            
                                            WHERE Matricula = (SELECT u.usuario
                                                                        FROM usuarios AS u 
                                                                            INNER JOIN maestros AS ma ON ma.Matricula = u.usuario
                                                                                WHERE u.usuario LIKE $Usuario)
                                                                                GROUP BY IdCurso");
        $Materia = Materias::withTrashed()->orderBy('IdMateria', 'asc')->get(); //withTrashed -> todos ->eliminados (lógico) o no
        // ________consulta de tareas___
        $C_Tarea=tareas::withTrashed()->orderBy('IdTarea', 'asc')->get();
            

        if (Session::get('sesionidu') != "") {
            return view('Maestros.Tareas')
                ->with('C_Tarea', $C_Tarea)
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
    
      
        for ($n=0; $n<count($IdCurso); $n++)
         {
                $Tarea = new tareas;
                $Tarea->Tema = $request->Tema;
                $Tarea->Descripcion = $request->Descripción;
                $Tarea->FechaHoraInicio = $FechaHoraInicio;
                $Tarea->FechaHoraFin = $FechaHoraFin;
                $Tarea->IdCurso = $IdCurso[$n];
                $Tarea->TipoTarea = $request->TipoTarea;
                $Tarea->save();

           
        }
        return redirect()->back();
 
    }

    //Eliminación Lógica
    public function Eltarea($IdTarea){
        tareas::find($IdTarea)->delete();

        return redirect()->back();
    }

//Activación
    public function aTarea($IdTarea){
        tareas::withTrashed()->where('IdTarea',$IdTarea)->restore();

        return redirect()->back();
    }

//Eliminación Física
    public function EFTarea($IdTarea){
        tareas::withTrashed()->where('IdTarea',$IdTarea)->forceDelete();
        
        return redirect()->back();
    }
}
