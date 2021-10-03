<?php

namespace Database\Factories;

use App\Models\Rank;
use App\Models\RankRule;
use App\Models\PointRule;
use Illuminate\Database\Eloquent\Factories\Factory;

class RankFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Rank::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {   
        $rankRulesId = RankRule::pluck('id');
        $pointRulesId = PointRule::pluck('id');
        return [
            'name' => $this->faker->name(),
            'gender' => random_int(1, 2),
            'rank_rule_id' => $this->faker->randomElement($rankRulesId),
            'point_rule_id' => $this->faker->randomElement($pointRulesId),
        ];
    }
}
