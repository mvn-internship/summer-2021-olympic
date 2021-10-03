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
        $individualId = Individual::pluck('id');
        $groupId = Group::pluck('id');
        return [
            'individual_id' => $this->faker->randomElement($individualId),
            'group_id' => $this->faker->randomElement($groupId),
        ];
    }
}
