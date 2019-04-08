<?php
 namespace App\Http\Controllers;

 use Illuminate\Http\Request;

 use App\Http\Requests;
 use App\usuarios;
 use Session;

	class login extends Controller{
		public function login(){
			return view ('Admin.login');
		}
	 
		public function iniciasesion(Request $request){
	   	$usuario  = $request->usuario;
	  	$passw    = $request->password;
	   	$consulta = usuarios::withTrashed()->where('usuario','=',$usuario)
																					 ->where ('password','=',$passw)
							 														 ->get();

	 			if(count($consulta)==0){
    			Session::flash('error', 'El usuario no existe o la contraseña no es correcta');
		 				return redirect()->route('login');
				}
	   		else{
			  	$desactivado = $consulta[0]->deleted_at;
		   			if ($desactivado!=""){
		    			Session::flash('error', 'El usuario esta deshabilitado pase con su administrador');
		 						return redirect()->route('login');
		   			}
		   			else{
	      			Session::put('sesionname',$consulta[0]->nombre);
							Session::put('sesionidu',$consulta[0]->idu);
							Session::put('sesiontipo',$consulta[0]->tipo);
	      
							$sname = Session::get('sesionname');
							$sidu = Session::get('sesionidu');
							$stipo = Session::get('sesiontipo');
				
							return redirect()->route('principal');
		   			}
	   		}   
		 }
		 
   	public function principal(){
	  	if( Session::get('sesionidu')!="")
	   		return view ('administrador');
      	else{
					Session::flash('error', 'Favor de loguearse antes de continuar');
		 				return redirect()->route('login');
	   		}
			 }
			 
   	public function cerrarsesion(){
			Session::forget('sesionname');
			Session::forget('sesionidu');
			Session::forget('sesiontipo');
			Session::flush();
			Session::flash('error', 'Sesión Cerrada Correctamente');
			return redirect()->route('login');
   	}
	}