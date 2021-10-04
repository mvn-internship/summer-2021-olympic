<?php

namespace Database\Factories;

use App\Models\CompetitionType;
use Illuminate\Database\Eloquent\Factories\Factory;

class CompetitionTypeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CompetitionType::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word(),
        ];
    }
}
