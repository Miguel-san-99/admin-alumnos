<?php

namespace Tests\Feature;

use App\Models\Alumno;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AlumnosControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     */
    public function test_muestra_listado_alumnos(): void
    {
        // $response = $this->get(route('mensajes.index'));
        $response = $this->get('/alumnos');
        $response->assertSee('Listado de alumnos');

        $response->assertStatus(200);
    }

    public function test_muestra_formulario_crear_alumno(): void
    {
        $response = $this->get('/alumnos/create');
        $response->assertSee('Registrar alumno')
            ->assertSeeHtml('name="name"', false);

        $response->assertStatus(200);
    }

    public function test_crear_nuevo_alumno(): void
    {
        //Dado
        $alumno = Alumno::factory()->make();

        //Acción
        $response = $this->post('/alumnos', $alumno->toArray());

        //Expectativa
        $this->assertDatabaseHas('alumnos', $alumno->toArray());
        //$response->assertStatus(302);
        $response->assertRedirect('/alumnos');
    }

    public function test_muestra_formulario_editar_alumno(): void
    {
        //Dado
        $alumno = Alumno::factory()->create();

        //Acción
        // $response = $this->get("/mensajes/{$mensaje->id}/edit");
        $response = $this->get(route('alumnos.edit', $alumno->id));

        //Expectativa
        $response->assertSee('Editar alumno')
            ->assertSeeHtml($alumno->name)
            ->assertSeeHtml($alumno->email)
            ->assertSeeHtml($alumno->fecha_nac)
            ->assertStatus(200);
    }
}
