<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LeccionesController extends Controller
{
    
    public function index() {

        $leccion = lecciones::get();

        return view('lecciones.index', compact ('leccion'));
    }

    public function create() {

        return view('lecciones.create');

    }

    public function store() {

        request()->validate([
            'curso_id' => 'required',
            'leccion' => 'required',
            'descripcion' => 'required',
        ]);

        Lecciones::create([
            'curso_id' => 'required',
            'leccion' => 'required',
            'descripcion' => 'required',
        ]);

        return redirect('/lecciones');

    }

    public function show(Lecciones $leccion) {

        return view('lecciones.show', ['leccion' => $leccion]);

    }

    public function edit(Lecciones $leccion) {

        return view('lecciones.show', compact('leccion'));

    }

    public function update() {

        request()->validate([
            'curso_id' => 'required',
            'leccion' => 'required',
            'descripcion' => 'required',
        ]);

        Lecciones::create([
            'curso_id' => 'required',
            'leccion' => 'required',
            'descripcion' => 'required',
        ]);

    }

    public function destroy(Lecciones $leccion) {

        $usuario->delete();

        return redirect('/lecciones');

    }

}
