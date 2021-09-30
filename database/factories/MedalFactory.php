<?php

namespace Database\Factories;

use App\Models\Medal;
use App\Models\Rank;
use App\Models\Tournament;
use App\Models\Team;
use Illuminate\Database\Eloquent\Factories\Factory;

class MedalFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Medal::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {   
        $rank_id = Rank::select('id')->get();
        $tournament_id = Tournament::select('id')->get();
        $team_id = Team::select('id')->get();
        return [
            'name' => $this->faker->name(),
            'rank_id' => $this->faker->randomElement($rank_id),
            'tournament_id' => $this->faker->randomElement($tournament_id),
            'team_id' => $this->faker->randomElement($team_id),
        ];
    }
}
