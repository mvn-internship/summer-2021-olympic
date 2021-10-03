<?php

namespace Database\Factories;

use App\Models\Club;
use App\Models\Country;
use App\Models\Province;
use App\Models\District;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClubFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Club::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {   
        $countryId = Country::pluck('id');
        $provinceId = Province::pluck('id');
        $districtId =District::pluck('id');
        return [
            'name' => $this->faker->name(),
            'country_id' => $this->faker->randomElement($countryId),
            'province_id' => $this->faker->randomElement($provinceId),
            'district_id' => $this->faker->randomElement($districtId),
        ];
    }
}
