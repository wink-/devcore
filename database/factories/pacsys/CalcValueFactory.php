<?php

namespace Database\Factories\Pacsys;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Pacsys\CalcValue;

class CalcValueFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var  string
    */
    protected $model = CalcValue::class;

    /**
    * Define the model's default state.
    *
    * @return  array
    */
    public function definition(): array
    {
        return [
            'ValueName' => $this->faker->word,
            'Description' => $this->faker->word,
            'Formula' => $this->faker->word,
            'OrderCalc' => $this->faker->randomNumber(),
            'FormName' => $this->faker->word,
            'DecimalPlaces' => $this->faker->randomNumber(),
            'TimeStamp' => $this->faker->dateTime(),
        ];
    }
}
