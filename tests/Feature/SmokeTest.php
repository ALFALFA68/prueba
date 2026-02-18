<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class SmokeTest extends TestCase
{
    /**
     * Verifica que una ruta protegida redirija al login si el usuario no está autenticado.
     */
    public function test_protected_route_redirects_to_login(): void
    {
        // Intentamos acceder a una ruta que requiere autenticación
        $response = $this->get('/dashboard');

        // Verificamos que el estado sea 302 (Redirección)
        $response->assertStatus(202);
        
        // Verificamos que redirija específicamente a la página de login
        $response->assertRedirect('/login');
    }
}
