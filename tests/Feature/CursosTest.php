<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Cursos;

class CursosTest extends TestCase
{
    use WithFaker;
    use RefreshDatabase;
    
    /** @test */
    public function add_curso()
    {
        $attributes = [
            'curso' => 'El Curso',
            'descripcion' => 'Soy la descripcion que describe',
        ];

        $response = $this->post('/cursos', $attributes);

        $response->assertOk();
        $this->assertDatabaseHas('cursos', $attributes);
        $this->assertCount(1, Cursos::all());
    }

    /** @test */
    public function curso_is_required() {

        $attributes = [
            'curso' => '',
            'descripcion' => 'Soy la descripcion que describe',
        ];

        $response = $this->post('/cursos', $attributes);

        $response->assertSessionHasErrors('curso');

    }

    /** @test */
    public function descripcion_is_required() {

        $attributes = [
            'curso' => 'El Curso',
            'descripcion' => '',
        ];

        $response = $this->post('/cursos', $attributes);

        $response->assertSessionHasErrors('descripcion');

    }
}
