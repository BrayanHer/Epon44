<?php
 namespace App\Http\Controllers;
 use Illuminate\Http\Request;

 use App\Http\Requests;
 use App\Http\Controllers\Controller;
 use App\Materias;
 use App\Periodos;

    class Materia extends Controller{
        public function AMateria(){
            $clavequesigueM = materias::withTrashed()->orderBy('IdMateria', 'desc')
                                        ->take(1)
                                        ->get();
                if(count($clavequesigueM)==0){
                    $IdMateria = 1;
                }
                else{
                    $IdMateria = $clavequesigueM[0]->IdMateria + 1;
                }

                $Periodos = periodos::withTrashed()->orderBy('Periodo', 'asc')
                                                        ->get();
                
                $Materias =\DB::select("SELECT m.IdMateria, m.Materia, p.Periodo, l.deleted_at
                                            FROM materias AS m
                                            INNER JOIN periodos AS p ON p.IdPeriodo = m.IdPeriodo");

                    return view ("V_admin.Materias")
                    ->with('IdMateria', $IdMateria)
                    ->with('Periodos', $Periodos)
                    ->with('Materias', $Materias);
        }

        public function GMateria(Request $request){
            $IdMateria =$request->IdMateria;        
            $Materia   =$request->Materia;
            $IdPeriodo =$request->IdPeriodo;
                
            $this->validate($request,[
                'IdMateria'   => 'required|numeric',
                'Materia'    =>'required',['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
                'IdPeriodo'   => 'required|numeric',                      
            ]);

                $Mat = new materias;
                $Mat->IdMateria =$request->IdMateria;
                $Mat->Materia   =$request->Materia;
                $Mat->IdPeriodo =$request->IdPeriodo;
                $Mat->save();
                return redirect()->back();
        }
    }
