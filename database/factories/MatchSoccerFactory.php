<?php

namespace Database\Factories;

use App\Models\MatchSoccer;
use App\Models\Rank;
use App\Models\Tournament;
use App\Models\Group;
use Illuminate\Database\Eloquent\Factories\Factory;

class MatchSoccerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = MatchSoccer::class;

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
