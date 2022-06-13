<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuariosController extends Controller
{
    public function index(){
        $usuariosdb = Usuario::all();
        return view('usuarios.index', compact('usuariosdb'));
    }

    public function store(Request $request){
        $usuario = new Usuario();
        $usuario->nombre = $request->nombre;
        $usuario->correo = $request->correo;
        $usuario->save();
        return redirect()->route('usuarios.index');
    }
}
