<?php

namespace Database\Factories;

use App\Models\Races\Race;
use App\Models\Races\RaceInvite;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class RaceInviteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = RaceInvite::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'code' => Str::rrand(4),
            'contact_method_name' => $method = (['phone', 'email'])[rand(0, 1)],
            'contact_method_value' => $method === 'phone' ? $this->faker->phoneNumber : $this->faker->email,
            'race_id' => Race::factory()->create()->id,
            'inviter_id' => User::factory()->id,
        ];
    }
}
