<?php

namespace Database\Factories;

use App\Models\MatchAnalysic;
use App\Models\Participant;
use App\Models\Rank;
use App\Models\Match;
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
        $participant_id = Participant::select('id')->get();
        $rank_id = Rank::select('id')->get();
        $match_id = Match::select('id')->get();
        $tournament_id = Tournament::select('id')->get();
        return [
            'participant_id' => $this->faker->randomElement($participant_id),
            'rank_id' => $this->faker->randomElement($rank_id),
            'match_id' => $this->faker->randomElement($match_id),
            'score_time' => random_int(0, 100),
            'tournament_id' => $this->faker->randomElement($tournament_id),
        ];
    }
}
