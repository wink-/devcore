<?php

namespace Database\Factories\Pacsys;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Pacsys\FormType;

class FormTypeFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var  string
    */
    protected $model = FormType::class;

    /**
    * Define the model's default state.
    *
    * @return  array
    */
    public function definition(): array
    {
        return [
            'FormType' => $this->faker->word,
            'Description' => $this->faker->word,
            'TimeStamp' => $this->faker->dateTime(),
        ];
    }
}
