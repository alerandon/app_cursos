<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cursos;

class CursosController extends Controller
{
    
    public function index() {

        $curso = Cursos::all();

        return view('cursos.index', compact('curso'));

    }

    public function create() {

        return view('cursos.create');

    }

    public function store() {

        request()->validate([
            'curso' => 'required',
            'descripcion' => 'required',
        ]);

        Cursos::create([
            'curso' => request('curso'),
            'descripcion' => request('descripcion'),
        ]);

        //return redirect('/cursos');

    }

    public function show() {

        return view('cursos.show',['curso' => $curso]);

    }

    public function edit(Cursos $curso) {

        return view('cursos.edit', compact('curso'));

    }

    public function update() {

        request()->validate([
            'especializacion_id' => 'required',
            'curso' => 'required',
            'descripcion' => 'required',
        ]);
        
        Cursos::update([
            'especializacion_id' => 'required',
            'curso' => 'required',
            'descripcion' => 'required',
        ]);

        return redirect('/cursos');

    }

    public function destroy() {

        $curso->delete();

        return redirect('/cursos');

    }

}
