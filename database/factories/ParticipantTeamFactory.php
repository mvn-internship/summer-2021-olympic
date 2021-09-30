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
        $participant_id = Participant::select('id')->get();
        $team_id = Team::select('id')->get();
        return [
            'participant_id' => $this->faker->randomElement($participant_id),
            'team_id' => $this->faker->randomElement($team_id),
        ];
    }
}
