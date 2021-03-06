<?php

namespace Database\Factories\ProcessData;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\ProcessData\LoggerType;

class LoggerTypeFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var  string
    */
    protected $model = LoggerType::class;

    /**
    * Define the model's default state.
    *
    * @return  array
    */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'description' => $this->faker->text,
        ];
    }
}
