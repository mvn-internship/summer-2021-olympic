<?php

namespace Database\Factories;

use App\Models\OrganizationTournament;
use App\Models\Tournament;
use App\Models\Team;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrganizationTournamentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = OrganizationTournament::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $tournament_id = Tournament::select('id')->get();
        $team_id = Team::select('id')->get();
        return [
            'tournament_id' => $this->faker->randomElement($tournament_id),
            'teams_id' => $this->faker->randomElement($team_id),
        ];
    }
}
