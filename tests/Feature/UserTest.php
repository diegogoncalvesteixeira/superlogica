<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    use withFaker;

    /**
     * A basic feature test example.
     * @test
     * @return void
     */
    public function cadastra_user()
    {
        $dados = [
          'name' => $this->faker->lastName.' '.$this->faker->lastName,
          'userName' => $this->faker->userName,
          'zipCode' => '17013-000',
          'email' => $this->faker->email,
          'password' => '123456abc',
        ];

        $response = $this->post(route('store'),$dados);

        $response->assertStatus(302);

        $this->assertDatabaseHas('users', [
          'name' => $dados['name'],
          'username' => $dados['userName'],
          'zipCode' => $dados['zipCode'],
          'email' => $dados['email']
        ]);
    }
}
