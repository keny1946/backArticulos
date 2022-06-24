<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class loginTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function registerUser(){
        $user = User::factory()->create();
        $test_create = [
            'title' => 'Se registra un usuario',
            'body' => 'Este test registra un nuevo usuario',
            'is_draft' => false
        ];
        $response = $this->actingAs($user)->post('/user',$test_create);
        $response->assertSessionHas('status','Usuario creado satisfactoriamente');

    }
}
