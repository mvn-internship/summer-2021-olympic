<?php

namespace Database\Factories;

use App\Models\Match;
use App\Models\Rank;
use App\Models\Tournament;
use App\Models\Group;
use Illuminate\Database\Eloquent\Factories\Factory;

class MatchFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Match::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {   
        $rankId = Rank::pluck('id');
        $groupId = Group::pluck('id');
        $tournamentId = Tournament::pluck('id');
        return [
            'name' => $this->faker->name(),
            'rank_id' => $this->faker->randomElement($rankId),
            'match_code' => random_int(1000, 9999),
            'tournament_id' => $this->faker->randomElement($tournamentId),
            'group_id' => $this->faker->randomElement($groupId),
        ];
    }
}
