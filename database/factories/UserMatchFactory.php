<?php

namespace Database\Factories;

use App\Models\UserMatch;
use App\Models\User;
use App\Models\Match;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserMatchFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = UserMatch::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {   
        $user_id = User::select('id')->get();
        $match_id = Match::select('id')->get();
        return [
            'user_id' => $this->faker->randomElement($user_id),
            'match_id' => $this->faker->randomElement($match_id),
        ];
    }
}
