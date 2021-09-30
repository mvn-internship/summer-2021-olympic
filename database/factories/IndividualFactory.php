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
        $competition_type_id = CompetitionType::select('id')->get();
        $tournament_id = Tournament::select('id')->get();
        $rank_id = Rank::select('id')->get();
        return [
            'rank_id' => $this->faker->randomElement($rank_id),
            'tournament_id' => $this->faker->randomElement($tournament_id),
            'competition_type_id' => $this->faker->randomElement($competition_type_id),
        ];
    }
}
