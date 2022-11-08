<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ArrayTest extends TestCase
{
    /**
     * A basic feature test example.
     * @test
     * @return void
     */
    public function array_test()
    {
        $response = $this->get('/exercicio-2');

        $response->assertStatus(200);
    }
}
