<?php

namespace Database\Factories;

use App\Models\Team;
use App\Models\Tournament;
use App\Models\Group;
use App\Models\Club;
use Illuminate\Database\Eloquent\Factories\Factory;

class TeamFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Team::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $tournamentId = Tournament::pluck('id');
        $groupId = Group::pluck('id');
        $clubId = Club::pluck('id');
        return [
            'name' => $this->faker->name(),
            'tournament_id' => $this->faker->randomElement($tournamentId),
            'group_id' => $this->faker->randomElement($groupId),
            'coach_name' => $this->faker->name(),
            'club_id' => $this->faker->randomElement($clubId),
        ];
    }
}
