<?php

namespace Database\Factories;

use App\Models\InvidualGroup;
use App\Models\Group;
use App\Models\Individual;
use Illuminate\Database\Eloquent\Factories\Factory;

class InvidualGroupFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = InvidualGroup::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {   
        $individual_id = Individual::select('id')->get();
        $group_id = Group::select('id')->get();
        return [
            'individual_id' => $this->faker->randomElement($individual_id),
            'group_id' => $this->faker->randomElement($group_id),
        ];
    }
}
