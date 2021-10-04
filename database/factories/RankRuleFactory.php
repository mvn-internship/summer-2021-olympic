<?php

namespace Database\Factories;

use App\Models\RankRule;
use Illuminate\Database\Eloquent\Factories\Factory;

class RankRuleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = RankRule::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'type' => $this->faker->name(),
            'rule_order' => random_int(1, 10),
        ];
    }
}
