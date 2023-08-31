<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios=Usuario::all();        
        return view('getUsuarios',['Usuarios'=>$usuarios]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return redirect()->route('createUsuarios');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {        
        $id="CMU-"+(string)((int)(substr(Usuario::latest('idUsuario')->first()->idUsuario,4))+1);
        $usuario=new Usuario;
        $usuario->idUsuario=$id;
        $usuario->usuario=$request->usuario;
        $usuario->contraseña=$request->contraseña;
        $usuario->idEmpleado=$request->idEmpleado;
        $usuario->save();
        return redirect()->route('getUsuarios');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $usuario=Usuario::where('idUsuario',$id)->get();
        return view('showUsuario',['usuario'=>$usuario]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuario=Usuario::where('idUsuario',$id)->get();
        return view('EditUsuario',['usuario'=>$usuario]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Usuario::where('idUsuario',$id)->update([
            'usuario'=> $request->usuario,
            'contraseña'=>$request->contraseña,
        ]);         
        return redirect()->route('getUsuarios');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuario=Usuario::where('idUsuario',$id)->delete();
        return redirect()->route('getUsuarios');
    }
}
