<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Laravel\Sanctum\NewAccessToken;
use Tests\TestCase;

class a extends TestCase
{
    use RefreshDatabase;

    public function test_registering()
    {
        $response = $this->post('/api/register', [
            'name' => 'Test',
            'email' => 'test@test.com',
            'password' => 'test12345asdf',
        ]);
        $response->assertSuccessful();
        $response->assertJsonFragment([
            'name' => 'Test',
            'email' => 'test@test.com',
        ]);
    }

    public function test_getting_user_info()
    {
        $user = User::factory()->create();
        $token = $user->createToken('auth');
        $this->withHeader('Authorization', "Bearer {$token->plainTextToken}")
            ->get('/api/user')
            ->assertJsonFragment($user->toArray());
    }

    public function test_logging_in()
    {
        $user = User::factory()->create([
            'password' => 'test12345'
        ]);
        $this->post('/api/login', [
            'email' => $user->email,
            'password' => 'test12345',
        ])
        ->assertSuccessful()
        ->assertJsonFragment($user->toArray());
    }

    public function test_removing_tokens()
    {
        $user = User::factory()->create();
        $user->createToken('test');

        $this->actingAs($user)
            ->delete('/api/tokens');

        $this->assertTrue($user->tokens->isEmpty());
    }
}
