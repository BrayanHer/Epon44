<?php
 namespace App\Http\Controllers;

 use Illuminate\Http\Request;
 use Session;
 use App\maestros;
 use App\usuarios;
 use App\Http\Requests;

    class Maestro extends Controller{
        public function Maestros(){
            $clavequesigueM = maestros::withTrashed()->orderBy('IdMaestro', 'desc')
                                                        ->take(1)
                                                        ->get();
                if(count($clavequesigueM)==0){
                    $IdMaestro = 1;
                }
                else{
                    $IdMaestro = $clavequesigueM[0]->IdMaestro + 1;
                }

            if(Session::get('sesionidu')!="")
                return view('Maestros.Registro')
                        ->with('IdMaestro',$IdMaestro);
            else{
                Session::flash('error', 'Debe iniciar sesión');
                    return redirect()->route('login');
            }
        }

        public function C_Maestros(){
            $Maestros = maestros::withTrashed()->orderBy('IdMaestro', 'asc')
                                                    ->get();

            if(Session::get('sesionidu')!="")
                return view('Maestros.Consulta')
                        ->with('Maestros',$Maestros);
            else{
                Session::flash('error', 'Debe iniciar sesion');
                    return redirect()->route('login');
          }
        }

        public function G_Maestro(Request $request){
            $IdMaestro = $request->IdMaestro;
            $Matricula = $request->Matricula;
            $NombreM   = $request->NombreM;
            $APaterno  = $request->APaterno;
            $AMaterno  = $request->AMaterno;
            $Correo    = $request->Correo;
            $Telefono  = $request->Telefono;

            $this->validate($request,[
                'IdMaestro' => 'required|numeric',
                'Matricula' => 'required|numeric',
                'NombreM'   => 'required',['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
                'APaterno'  => 'required',['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
                'AMaterno'  => 'required',['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
                'Correo'    => 'required|email',
                'Telefono'  => 'required|numeric'
            ]);

            $User_name=$request->NombreM.' '.$request->APaterno;
        
            $Mar = new maestros;
            $Mar->IdMaestro = $request->IdMaestro;
            $Mar->Matricula = $request->Matricula;
            $Mar->NombreM   = $request->NombreM;
            $Mar->APaterno  = $request->APaterno;
            $Mar->AMaterno  = $request->AMaterno;
            $Mar->Correo    = $request->Correo;
            $Mar->Telefono  = $request->Telefono;
            $Mar->save();

            $login = new usuarios;
			$login->nombre   = $User_name;
			$login->correo   = $request->Correo;
			$login->usuario  = $request->NombreM;
			$login->password = $request->Matricula;
            $login->tipo     = 'Maestro';
            $login->Registro = 'si';
            $login->save();
            
            Session::flash('mensaje','Tu usuario para ingresar es: '.$NombreM.'  y Tu contraseña será: '.$Matricula.'');	
            return redirect()->back();
        }

    //Eliminación Usuario
        public function Des_Usuario(Request $request){
            $Correo = $request->Correo;
            usuarios::find($Correo)->delete(); 
        }

    //Eliminación Lógica
        public function Des_Maestro($IdMaestro){
            maestros::find($IdMaestro)->delete();

            return redirect()->back();  
        }

    //Activación
        public function Act_Maestro($IdMaestro){
            maestros::withTrashed()->where('IdMaestro',$IdMaestro)->restore();

            return redirect()->back();
        }

    //Eliminación Física
        public function Del_Categoria($IdMaestro){
            maestros::withTrashed()->where('IdMaestro',$IdMaestro)->forceDelete();
        
            return redirect()->back();
        }
    }






