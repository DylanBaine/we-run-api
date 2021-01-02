<?php

namespace Database\Factories;

use App\Models\Races\Race;
use App\Models\Races\RaceParticipant;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class RaceParticipantFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = RaceParticipant::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'participant_id' => User::factory()->create()->id,
            'inviter_id' => User::factory()->create()->id,
            'race_id' => Race::factory()->create()->id,
        ];
    }
}
