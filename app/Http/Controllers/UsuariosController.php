<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuarios;

class UsuariosController extends Controller
{
    
    public function index() {

        $usuario = Usuarios::get();

        return view('usuarios.index', compact('usuario'));

    }

    public function create() {

        return view('usuarios.create');

    }

    public function store() {

        request()->validate([
            'nombre' => 'required',
            'contraseña' => 'required',
            'correo' => 'required',
            'rol' => 'required'
        ]);

        Usuarios::create([
            'nombre' => 'required',
            'contraseña' => 'required',
            'correo' => 'required',
            'rol' => 'required'
        ]);

        return redirect('/usuarios');

    }

    public function show(Usuarios $usuario) {

        return view('usuarios.show', ['usuario' => $usuario]);

    }

    public function edit(Usuarios $usuario) {

        return view('usuarios.edit', compact('usuario'));

    }

    public function update() {

        request()->validate([
            'nombre' => 'required',
            'contraseña' => 'required',
            'correo' => 'required',
            'rol' => 'required'
        ]);

        Usuarios::update([
            'nombre' => 'required',
            'contraseña' => 'required',
            'correo' => 'required',
            'rol' => 'required'
        ]);

        return redirect('/usuarios');

    }

    public function destroy(Usuarios $usuario) {

        $usuario->delete();

        return redirect('/usuarios');

    }

}
