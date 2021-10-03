<?php

namespace Database\Factories;

use App\Models\District;
use App\Models\Province;
use Illuminate\Database\Eloquent\Factories\Factory;

class DistrictFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = District::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {   
        $provinceId = Province::pluck('id');
        return [
            'name' => $this->faker->name(),
            'province_id' => $this->faker->randomElement($provinceId),
        ];
    }
}
