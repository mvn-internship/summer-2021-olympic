<?php

namespace Database\Factories;

use App\Models\ParticipantRank;
use App\Models\Participant;
use App\Models\Rank;
use Illuminate\Database\Eloquent\Factories\Factory;

class ParticipantRankFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ParticipantRank::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {   
        $participantId = Participant::pluck('id');
        $rankId = Rank::pluck('id');
        return [
            'participant_id' => $this->faker->randomElement($participantId),
            'rank_id' => $this->faker->randomElement($rankId),
        ];
    }
}
