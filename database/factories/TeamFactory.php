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
        $tournament_id = Tournament::select('id')->get();
        $group_id = Group::select('id')->get();
        $club_id = Club::select('id')->get();
        return [
            'name' => $this->faker->name(),
            'tournament_id' => $this->faker->randomElement($tournament_id),
            'group_id' => $this->faker->randomElement($group_id),
            'coach_name' => $this->faker->name(),
            'clubs_id' => $this->faker->randomElement($club_id),
        ];
    }
}
