<?php

namespace Database\Factories;

use App\Models\Role;
use Illuminate\Database\Eloquent\Factories\Factory;
use DB;

class RoleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Role::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {   
        $data=[
    		[
    			'name' => 'admin'
    		],
            [
    			'name' => 'client'
    		],
            [
    			'name' => 'referee'
    		],
    				
    	];
        DB::table('roles')->insert($data);
        return [
            // 'name' => $this->faker->name(),
        ];
    }
}
