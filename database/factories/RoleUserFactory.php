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
        $roleId = Role::pluck('id');
        $userId = User::pluck('id');
        return [
            'role_id' => $this->faker->randomElement($roleId),
            'user_id' => $this->faker->randomElement($userId),
        ];
    }
}
