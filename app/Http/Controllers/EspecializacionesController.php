<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EspecializacionesController extends Controller
{
    
    public function index() {

        $especializacion = Especializaciones::get();

        return view('especializaciones.index', compact('especializaciones'));

    }

    public function create() {

        return view('especializaciones.create');

    }

    public function store() {

        request()->validate([
            'especializacion' => 'required',
            'descripcion' => 'required',
        ]);
        
        Especializaciones::create([
            'especializacion' => 'required',
            'descripcion' => 'required',
        ]);

        return redirect('/especializaciones');

    }

    public function show(Especializaciones $especializacion) {

        return view('especializaciones.show',['especializacion' => $especializacion]);

    }

    public function edit(Especializaciones $especializacion) {

        return view('especializaciones.edit', compact('especializacion'));

    }

    public function update() {

        request()->validate([
            'especializacion' => 'required',
            'descripcion' => 'required',
        ]);

        Especializaciones::create([
            'especializacion' => 'required',
            'descripcion' => 'required',
        ]);

        return redirect('/especializacion');

    }

    public function destroy(Especializaciones $especializacion) {

        $especializacion->delete();

        return redirect('/especializacion');

    }

}
