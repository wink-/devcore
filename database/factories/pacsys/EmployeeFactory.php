<?php

namespace Database\Factories\Pacsys;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Pacsys\Employee;

class EmployeeFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var  string
    */
    protected $model = Employee::class;

    /**
    * Define the model's default state.
    *
    * @return  array
    */
    public function definition(): array
    {
        return [
            'code' => $this->faker->word,
            'user_name' => $this->faker->word,
            'name' => $this->faker->name,
            'pin' => $this->faker->word,
            'production' => $this->faker->numberBetween($min = 0, $max = 1),
            'supervisor' => $this->faker->numberBetween($min = 0, $max = 1),
        ];
    }
}
