<?php

namespace Tests\Feature\Races;

use App\Models\Races\Race;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RaceApiTest extends TestCase
{
    use RefreshDatabase;

    public function test_creating_race()
    {
        $this->actingAs($u = User::factory()->create())
            ->json('post', '/api/races', [
                'name' => 'test',
                'description' => 'test',
                'start_time' => now()->toDateTimeString(),
                'distance_number' => '3.2',
                'distance_units' => 'miles',
            ])
            ->assertSuccessful();

        $this->assertEquals(1, $u->races->count());
    }

    public function test_updating_race()
    {
        $u = User::factory()->create();
        $race = Race::factory()->create([
            'created_by_id' => $u->id,
        ]);
        $this->actingAs($u)
            ->json('put', "/api/races/$race->id", [
                'name' => 'test',
                'description' => 'test',
                'start_time' => now()->toDateTimeString(),
                'distance_number' => '3.2',
                'distance_units' => 'miles',
            ])
            ->assertSuccessful();

        $r = $u->races->first();
        $this->assertEquals(
            [
                'name' => 'test',
                'description' => 'test',
                'start_time' => now()->toDateTimeString(),
                'distance_number' => '3.2',
                'distance_units' => 'miles',
            ],
            [
                'name' => $r->name,
                'description' => $r->description,
                'start_time' => $r->start_time,
                'distance_number' => $r->distance_number,
                'distance_units' => $r->distance_units,
            ]
        );
    }

    public function test_deleting_race()
    {
        $u = User::factory()->create();
        $race = Race::factory()->create([
            'created_by_id' => $u->id,
        ]);
        $this->actingAs($u)
            ->json('delete', "/api/races/$race->id")
            ->assertSuccessful();

        $this->assertEquals(0, $u->races->count());
    }
}
