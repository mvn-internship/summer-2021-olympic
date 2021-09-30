<?php

namespace Database\Factories;

use App\Models\Permisson;
use Illuminate\Database\Eloquent\Factories\Factory;

class PermissonFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Permisson::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'display_name' => $this->faker->name(),
        ];
    }
}
