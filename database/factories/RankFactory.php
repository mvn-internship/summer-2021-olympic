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
        $rank_rules_id = RankRule::select('id')->get();
        $point_rules_id = PointRule::select('id')->get();
        return [
            'name' => $this->faker->name(),
            'gender' => random_int(1, 2),
            'rank_rules_id' => $this->faker->randomElement($rank_rules_id),
            'point_rules_id' => $this->faker->randomElement($point_rules_id),
        ];
    }
}
