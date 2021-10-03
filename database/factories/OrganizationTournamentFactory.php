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
        $tournamentId = Tournament::pluck('id');
        $teamId = Team::pluck('id');
        return [
            'tournament_id' => $this->faker->randomElement($tournamentId),
            'teams_id' => $this->faker->randomElement($teamId),
        ];
    }
}
