<?php

namespace Database\Factories\Pacsys;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Pacsys\FormValueUnit;

class FormValueUnitFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var  string
    */
    protected $model = FormValueUnit::class;

    /**
    * Define the model's default state.
    *
    * @return  array
    */
    public function definition(): array
    {
        return [
            'Name' => $this->faker->word,
            'FormName' => $this->faker->word,
            'unit1' => $this->faker->word,
            'unit2' => $this->faker->word,
            'unit3' => $this->faker->word,
            'unit4' => $this->faker->word,
            'unit5' => $this->faker->word,
            'unit6' => $this->faker->word,
            'unit7' => $this->faker->word,
            'unit8' => $this->faker->word,
            'unit9' => $this->faker->word,
            'unit10' => $this->faker->word,
            'unit11' => $this->faker->word,
            'unit12' => $this->faker->word,
            'unit13' => $this->faker->word,
            'unit14' => $this->faker->word,
            'unit15' => $this->faker->word,
            'unit16' => $this->faker->word,
            'unit17' => $this->faker->word,
            'unit18' => $this->faker->word,
            'unit19' => $this->faker->word,
            'unit20' => $this->faker->word,
            'Tank' => $this->faker->word,
            'TimeStamp' => $this->faker->dateTime(),
        ];
    }
}
