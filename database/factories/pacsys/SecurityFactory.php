<?php

namespace Database\Factories\Pacsys;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Pacsys\Security;

class SecurityFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var  string
    */
    protected $model = Security::class;

    /**
    * Define the model's default state.
    *
    * @return  array
    */
    public function definition(): array
    {
        return [
            'EmpCode' => $this->faker->word,
            'Scope' => $this->faker->word,
            'TimeStamp' => $this->faker->dateTime(),
        ];
    }
}
