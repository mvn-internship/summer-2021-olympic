<?php

namespace Database\Factories;

use App\Models\ParticipantTeam;
use App\Models\Participant;
use App\Models\Team;
use Illuminate\Database\Eloquent\Factories\Factory;

class ParticipantTeamFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ParticipantTeam::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {   
        $participantId = Participant::pluck('id');
        $teamId = Team::pluck('id');
        return [
            'participant_id' => $this->faker->randomElement($participantId),
            'team_id' => $this->faker->randomElement($teamId),
        ];
    }
}
