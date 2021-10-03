<?php

namespace Database\Factories;

use App\Models\PointRule;
use Illuminate\Database\Eloquent\Factories\Factory;
use DB;

class PointRuleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PointRule::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {   
        $data = [
            [
                'win' => 2,
                'lose' => 0,
                'draw' => 1
            ]
        ];
        DB::table('point_rules')->insert($data);
        return [
            
        ];
    }
}
