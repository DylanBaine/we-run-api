<?php

namespace Tests\Feature\Models;

use App\Models\Race;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RaceTest extends TestCase
{

    use RefreshDatabase;

    public function test_invites_relation()
    {
        $race = Race::factory()->create();

        $race->invites()->create([
            'contact_method_value' => 'test@test.com',
            'contact_method_name' => 'email',
            'inviter_id' => $race->createdBy->id,
        ]);

        $this->assertTrue(
            $race->invites()
                ->where([
                    'contact_method_value' => 'test@test.com',
                    'contact_method_name' => 'email',
                ])->exists()
        );
    }
}
