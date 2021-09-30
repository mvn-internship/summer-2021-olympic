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
        $match_id = Match::select('id')->get();
        $place_id = Place::select('id')->get();
        return [
            'name' => $this->faker->name(),
            'date' => $this->faker->date(),
            'start_time' => $this->faker->time($format = 'H:i:s'),
            'end_time' => $this->faker->time($format = 'H:i:s'),
            'match_id' => $this->faker->randomElement($match_id),
            'place_id' => $this->faker->randomElement($place_id),
        ];
    }
}
