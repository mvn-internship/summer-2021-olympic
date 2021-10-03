<?php

namespace Database\Factories;

use App\Models\RolePermisson;
use App\Models\Permisson;
use App\Models\Role;
use Illuminate\Database\Eloquent\Factories\Factory;

class RolePermissonFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = RolePermisson::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {   
        $permissonId = Permisson::pluck('id');
        $roleId = Role::pluck('id');
        return [
            'permisson_id' => $this->faker->RandomElement($permissonId),
            'role_id' => $this->faker->RandomElement($roleId),
        ];
    }
}
