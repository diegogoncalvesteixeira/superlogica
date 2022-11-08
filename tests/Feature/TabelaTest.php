<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Usuario;

class TabelaTest extends TestCase
{
    /**
     * A basic feature test example.
     * @test
     * @return void
     */
    public function tabela()
    {
        $response = $this->get('/exercicio-3');
        $response->assertStatus(200);

        $response->assertSee('Usuário');
        $response->assertSee('maior_50_anos');

        $usuarios = Usuario::with('info')->get();
        if($usuarios){
          foreach ($usuarios as $usuario){
            $response->assertSee($usuario->nome);
            $response->assertSee($usuario->info->maior_idade);
          }
        }

    }
}
