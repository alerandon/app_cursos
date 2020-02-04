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

        Usuarios::create([
            'nombre' => request['nombre'],
            'contraseña' => request['contraseña'],
            'correo' => request['correo'],
            'rol' => request['rol']
        ]);

        Role::create(['name' => request['rol']]);

        if (request['rol'] == "estudiante") {

            Permission::create(['name' => 'read_especializacion']);
            Permission::create(['name' => 'read_curso']);
            Permission::create(['name' => 'read_lecciones']);

        }
        else if (request['rol'] == "instructor") {

            Permission::create(['name' => 'create_especializacion']);
            Permission::create(['name' => 'create_curso']);
            Permission::create(['name' => 'create_leccion']);

            Permission::create(['name' => 'read_especializacion']);
            Permission::create(['name' => 'read_curso']);
            Permission::create(['name' => 'read_leccion']);

            Permission::create(['name' => 'update_especializacion']);
            Permission::create(['name' => 'update_curso']);
            Permission::create(['name' => 'update_leccion']);

            Permission::create(['name' => 'delete_especializacion']);
            Permission::create(['name' => 'delete_curso']);
            Permission::create(['name' => 'delete_leccion']);

        }

        $permission = Permission::create(['name' => 'edit articles']);

        $role->givePermissionTo($permission);

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
