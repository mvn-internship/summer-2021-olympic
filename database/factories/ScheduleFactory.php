<?php

namespace Database\Factories;

use App\Models\Schedule;
use App\Models\Match;
use App\Models\Place;
use Illuminate\Database\Eloquent\Factories\Factory;

class ScheduleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = schedule::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {   
        $matchId = Match::pluck('id');
        $placeId = Place::pluck('id');
        return [
            'name' => $this->faker->name(),
            'date' => $this->faker->date(),
            'start_time' => $this->faker->time($format = 'H:i:s'),
            'end_time' => $this->faker->time($format = 'H:i:s'),
            'match_id' => $this->faker->randomElement($matchId),
            'place_id' => $this->faker->randomElement($placeId),
        ];
    }
}
