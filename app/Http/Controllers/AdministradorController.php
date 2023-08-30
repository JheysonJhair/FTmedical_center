<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\Empleado;
use App\Models\Dato;
use App\Models\Area;



class AdministradorController extends Controller
{
    public function getDatos(Request $request){
        $user = session('datos_enviados'); 
        //realizando consulta de la tablas requeridas
        $atributo=Usuario::join('Empleado as E','E.idEmpleado','=','Usuario.idEmpleado')
        ->join('Dato as D','D.dni','=','E.dni')
        ->join('Area as A','A.idArea','=','E.idArea')
        ->select('E.especialidad','D.nombreDato','A.nombre','A.estado')
        ->where('Usuario.usuario','=',$user['usuario'])
        ->where('Usuario.contraseña','=',$user['contraseña'])
        ->get();        
        return view('dashboard',['atributo'=>$atributo]);
    }
}
