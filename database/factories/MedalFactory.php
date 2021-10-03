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
        $rankId = Rank::pluck('id');
        $tournamentId = Tournament::pluck('id');
        $teamId = Team::pluck('id');
        return [
            'name' => $this->faker->name(),
            'rank_id' => $this->faker->randomElement($rankId),
            'tournament_id' => $this->faker->randomElement($tournamentId),
            'team_id' => $this->faker->randomElement($teamId),
        ];
    }
}
