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
        $usuarios = Usuario::all();
        return view('user', compact('usuarios'));
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
        // Generar un nuevo ID para el usuario, según tu lógica
        $id = "CMU-" . (string)((int)(substr(Usuario::latest('idUsuario')->first()->idUsuario, 4)) + 1);

        // Crear una nueva instancia de Usuario
        $usuario = new Usuario;
        $usuario->idUsuario = $id;
        $usuario->usuario = $request->input('usuario');
        $usuario->contraseña = $request->input('contraseña');
        $usuario->idEmpleado = 1; // Asigna un valor predeterminado para idEmpleado
        $usuario->save();

        // Redirigir a la vista de lista de usuarios después de crear el usuario
        return redirect()->route('indexUsuarios');
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
        $usuario = Usuario::where('idUsuario', $id)->first(); // Usar 'first()' en lugar de 'get()'
        return view('EditUsuario', compact('usuario'));
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
        Usuario::where('idUsuario', $id)->update([
            'usuario' => $request->usuario,
            'contraseña' => $request->contraseña,
        ]);
        return redirect()->route('indexUsuarios'); // Redirecciona a la lista de usuarios después de actualizar
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
