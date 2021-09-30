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
        $country_id = Country::select('id')->get();
        $province_id = Province::select('id')->get();
        $district_id =District::select('id')->get();
        return [
            'name' => $this->faker->name(),
            'country_id' => $this->faker->randomElement($country_id),
            'province_id' => $this->faker->randomElement($province_id),
            'district_id' => $this->faker->randomElement($district_id),
        ];
    }
}
