<?php

namespace Tests\Feature;

use App\Models\Race;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RaceInviteTest extends TestCase
{
    use RefreshDatabase;

    public function test_acceptBy()
    {
        $race = Race::factory()->create();
        $user = $race->createdBy;
        $newUser = User::factory()->create();
        $invite = $user->sendInviteForRace($race, 'email', 'test@test.com');

        $invite->acceptBy($newUser);

        $this->assertTrue(
            $race->participants()
                ->where([
                    'participant_id' => $newUser->id,
                    'inviter_id' => $user->id,
                ])->exists()
        );
    }
}
