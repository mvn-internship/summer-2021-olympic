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
        $rank_id = Rank::select('id')->get();
        $group_id = Group::select('id')->get();
        $tournament_id = Tournament::select('id')->get();
        return [
            'name' => $this->faker->name(),
            'rank_id' => $this->faker->randomElement($rank_id),
            'match_code' => random_int(1000, 9999),
            'tournament_id' => $this->faker->randomElement($tournament_id),
            'group_id' => $this->faker->randomElement($group_id),
        ];
    }
}
