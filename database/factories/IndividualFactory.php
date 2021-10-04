<?php

namespace Database\Factories;

use App\Models\Individual;
use App\Models\Tournament;
use App\Models\Rank;
use App\Models\CompetitionType;
use Illuminate\Database\Eloquent\Factories\Factory;

class IndividualFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Individual::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {   
        $competition_typeId = CompetitionType::pluck('id');
        $tournamentId = Tournament::pluck('id');
        $rankId = Rank::pluck('id');
        return [
            'rank_id' => $this->faker->randomElement($rankId),
            'tournament_id' => $this->faker->randomElement($tournamentId),
            'competition_type_id' => $this->faker->randomElement($competition_typeId),
        ];
    }
}
