<?php

namespace Database\Factories;

use App\Models\MatchResult;
use App\Models\Team;
use App\Models\Match;
use Illuminate\Database\Eloquent\Factories\Factory;

class MatchResultFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = MatchResult::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {   
        $team_id = Team::select('id')->get();
        $match_id = Match::select('id')->get();
        return [
            'team_id' => $this->faker->randomElement($team_id),
            'sec' => random_int(1, 3),
            'team_point' => random_int(1, 100),
            'match_id' => $this->faker->randomElement($match_id),
        ];
    }
}
