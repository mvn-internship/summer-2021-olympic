<?php

namespace Database\Factories;

use App\Models\PenatlyCard;
use App\Models\Participant;
use App\Models\MatchSoccer;
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
        $participantId = Participant::pluck('id');
        $matchId = MatchSoccer::pluck('id');
        return [
            'name' => $this->faker->name(),
            'type_penatly' => random_int(1, 2),
            'participant_id' => $this->faker->randomElement($participantId),
            'match_id' => $this->faker->randomElement($matchId),
        ];
    }
}
