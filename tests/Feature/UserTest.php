<?php

namespace Tests\Feature;

use App\Jobs\SendInviteToRecipient;
use App\Models\Race;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Queue;
use Tests\TestCase;

class UserTest extends TestCase
{

    use RefreshDatabase;

    public function test_races()
    {
        $user = User::factory()->create();
        $user->races()->create([
            'start_time' => now()->addDays(20),
            'distance_number' => 3.2,
            'distance_units' => 'miles',
        ]);

        $this->assertTrue(
            $user->races()
                ->where([
                    'distance_number' => 3.2,
                    'distance_units' => 'miles',
                ])
                ->exists()
        );
    }

    public function test_sendInviteForRace()
    {
        Queue::fake();
        $user = User::factory()->create();
        $race = Race::factory()->create();

        $user->sendInviteForRace($race, 'email', 'test@test.com');

        $this->assertTrue(
            $user->invites()
                ->where([
                    'race_id' => $race->id,
                    'contact_method_value' => 'test@test.com',
                    'contact_method_name' => 'email',
                ])
                ->exists()
        );

        Queue::assertPushed(SendInviteToRecipient::class);
    }

}
