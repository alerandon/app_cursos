<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuarios;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class UsuariosController extends Controller
{
    
    public function index() {

        $usuario = Usuarios::get();

        return view('usuarios.index', compact('usuario'));

    }

    public function create() {

        return view('usuarios.create');

    }

    public function store(Request $request) {

        request()->validate([
            'nombre' => 'required',
            'contraseña' => 'required',
            'correo' => 'required',
            'rol' => 'required'
        ]);

        $user = Usuarios::create([
            'nombre' => $request['nombre'],
            'contraseña' => Hash::make($request['password']),
            'correo' => $request['correo'],
            'rol' => $request['rol']
        ]);

        if ($request['rol'] == "estudiante") {

            $user->syncRoles(['estudiante']);

        }
        else if ($request['rol'] == "instructor") {

            $user->syncRoles(['instructor']);

        }

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
            'nombre' => $request['nombre'],
            'contraseña' => Hash::make($request['password']),
            'correo' => $request['correo'],
            'rol' => $request['rol']
        ]);

        return redirect('/usuarios');

    }

    public function destroy(Usuarios $usuario) {

        $usuario->delete();

        return redirect('/usuarios');

    }

}
