<?php

namespace Database\Factories;

use App\Models\RoleUser;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class RoleUserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = RoleUser::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {   
        $role_id = Role::select('id')->get();
        $user_id = User::select('id')->get();
        return [
            'role_id' => $this->faker->randomElement($role_id),
            'user_id' => $this->faker->randomElement($user_id),
        ];
    }
}
