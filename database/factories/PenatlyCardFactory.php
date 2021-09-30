<?php

namespace Database\Factories;

use App\Models\PenatlyCard;
use App\Models\Participant;
use App\Models\Match;
use Illuminate\Database\Eloquent\Factories\Factory;

class PenatlyCardFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PenatlyCard::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {   
        $participant_id = Participant::select('id')->get();
        $match_id = Match::select('id')->get();
        return [
            'name' => $this->faker->name(),
            'time_penatly' => random_int(0, 100),
            'participant_id' => $this->faker->randomElement($participant_id),
            'match_id' => $this->faker->randomElement($match_id),
        ];
    }
}
