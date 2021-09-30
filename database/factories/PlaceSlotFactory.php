<?php

namespace Database\Factories;

use App\Models\PlaceSlot;
use App\Models\Place;
use Illuminate\Database\Eloquent\Factories\Factory;

class PlaceSlotFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PlaceSlot::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {   
        $place_id = Place::select('id')->get();
        return [
            'name' => $this->faker->name(),
            'place_id' => $this->faker->randomElement($place_id),
        ];
    }
}
