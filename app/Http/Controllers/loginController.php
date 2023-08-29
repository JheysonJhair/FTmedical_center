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
            
            //return view('roles',['datos'=>$datos]);
            return 'Usuario: '.$usuario."-Contraseña: ".$contraseña;
        }else{                    
            return view('login');  
        }
        
    }
}
