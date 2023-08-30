<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class loginController extends Controller
{
    public function inicioLogin(){
        return view('login');
    }
    public function validar(Request $request){
        $usuario=$request->usuario;
        $contraseña=$request->contraseña;        
        if(Usuario::where('usuario',$usuario)->where('contraseña',$contraseña)->exists()){          
            //realizando consulta de la tablas requeridas
            $atributo=Usuario::join('Empleado as E','E.idEmpleado','=','Usuario.idEmpleado')
            ->join('Dato as D','D.dni','=','E.dni')
            ->join('Area as A','A.idArea','=','E.idArea')
            ->select('E.especialidad','D.nombreDato','A.nombre','A.estado')
            ->where('Usuario.usuario','=',$usuario)
            ->where('Usuario.contraseña','=',$contraseña)
            ->get();
            return view('dashboard',["atributo"=>$atributo]);
        }else{                    
            return view('login');  
        }
        
    }
}
