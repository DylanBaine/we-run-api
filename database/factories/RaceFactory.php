<?php

namespace Database\Factories;

use App\Models\Races\Race;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class RaceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Race::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'created_by_id' => User::factory()->create()->id,
            'start_time' => $this->faker->time(),
            'distance_number' => $this->faker->numberBetween(3, 26),
            'distance_units' => (['miles', 'meters'])[rand(0, 1)],
        ];
    }
}
