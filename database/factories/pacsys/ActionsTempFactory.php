<?php

namespace Database\Factories\Pacsys;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Pacsys\ActionsTemp;

class ActionsTempFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var  string
    */
    protected $model = ActionsTemp::class;

    /**
    * Define the model's default state.
    *
    * @return  array
    */
    public function definition(): array
    {
        return [
            'IDx' => $this->faker->randomNumber(),
            'RecordName' => $this->faker->word,
            'FormName' => $this->faker->word,
            'ValueName' => $this->faker->word,
            'Value' => $this->faker->word,
            'RecDate' => $this->faker->dateTime(),
            'ActDate' => $this->faker->dateTime(),
            'Complete' => $this->faker->boolean,
            'RecEmpCode' => $this->faker->word,
            'ActEmpCode' => $this->faker->word,
            'Unit' => $this->faker->word,
            'ActValue' => $this->faker->word,
            'ScopeName' => $this->faker->word,
            'Comment' => $this->faker->word,
            'Tank' => $this->faker->word,
            'TimeStamp' => $this->faker->dateTime(),
            'EmpName' => $this->faker->word,
            'IDy' => $this->faker->word,
            'ValueNum' => $this->faker->randomNumber(),
        ];
    }
}
