<?php

namespace Database\Factories;

use App\Models\Province;
use App\Models\Country;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProvinceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Province::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {   
        $countryId = Country::pluck('id');
        return [
            'name' => $this->faker->name(),
            'country_id' => $this->faker->randomElement($countryId),
        ];
    }
}
