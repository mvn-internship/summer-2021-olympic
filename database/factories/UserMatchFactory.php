<?php

namespace Database\Factories;

use App\Models\UserMatch;
use App\Models\User;
use App\Models\Role;
use App\Models\MatchSoccer;
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
        $userId = User::pluck('id');
        $matchId = MatchSoccer::pluck('id');
        $roleId = Role::pluck('id');
        return [
            'user_id' => $this->faker->randomElement($userId),
            'match_id' => $this->faker->randomElement($matchId),
            'role_id' => $this->faker->randomElement($roleId),
        ];
    }
}
