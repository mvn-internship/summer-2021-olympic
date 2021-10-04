<?php

namespace Database\Factories;

use App\Models\MatchAnalysic;
use App\Models\Participant;
use App\Models\Rank;
use App\Models\MatchSoccer;
use App\Models\Tournament;
use Illuminate\Database\Eloquent\Factories\Factory;

class MatchAnalysicFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = MatchAnalysic::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {   
        $participantId = Participant::pluck('id');
        $rankId = Rank::pluck('id');
        $matchId = MatchSoccer::pluck('id');
        $tournamentId = Tournament::pluck('id');
        return [
            'participant_id' => $this->faker->randomElement($participantId),
            'rank_id' => $this->faker->randomElement($rankId),
            'match_id' => $this->faker->randomElement($matchId),
            'score_time' => random_int(0, 100),
            'tournament_id' => $this->faker->randomElement($tournamentId),
        ];
    }
}
