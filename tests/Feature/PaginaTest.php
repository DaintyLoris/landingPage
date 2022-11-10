<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PaginaTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_pagina_contacto()
    {
        $response = $this->get('/contacto');

        $response->assertStatus(200);
        $response->assertSeeText(['Nombre', 'Correo', 'Comentario']);
    }

    /** @test */
    public function validacion_formulario()
    {
        $response = $this->post('/contacto', [
            'name' => 'a',
            'email' => 'correoInvalido',
            'comentario' => '',
        ]);

        $response->assertSessionHasErrors([
            'name',
            'email',
            'comentario',
        ]);
    }

    /** @test */
    public function prellenado_formulario_contacto()
    {
        $response = $this->get('/contacto/1234');
        $response->assertStatus(200);

        $this->assertEquals('Josue', $response['name']);
    }
}
