<?php

namespace Database\Factories;

use App\Models\Empleados;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class EmpleadosFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Empleados::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'  =>  $this->faker->name,
            'email' =>  $this->faker->email,
            'phone' => $this->faker->phoneNumber,
            'salary'    =>  $this->faker->numberBetween(30000,50000),
            'department'    =>  $this->faker->randomElement(array('Accounting','marketing','Sales','Supports','Ingenier'))
        ];
    }
}
