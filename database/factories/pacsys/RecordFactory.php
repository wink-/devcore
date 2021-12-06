<?php

namespace Database\Factories\Pacsys;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Pacsys\Record;

class RecordFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var  string
    */
    protected $model = Record::class;

    /**
    * Define the model's default state.
    *
    * @return  array
    */
    public function definition(): array
    {
        return [
            'Name' => $this->faker->word,
            'Description' => $this->faker->word,
            'FormName' => $this->faker->word,
            'FormType' => $this->faker->word,
            'ScopeName' => $this->faker->word,
            'ImageID' => $this->faker->randomNumber(),
            'TimeStamp' => $this->faker->dateTime(),
            'CapacityOld' => $this->faker->randomNumber(),
            'Capacity' => $this->faker->randomFloat(),
            'CapacityUnit' => $this->faker->word,
        ];
    }
}
