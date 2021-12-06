<?php

namespace Database\Factories\ProcessData;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\ProcessData\Logger;

class LoggerFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var  string
    */
    protected $model = Logger::class;

    /**
    * Define the model's default state.
    *
    * @return  array
    */
    public function definition(): array
    {
        return [
            'active' => $this->faker->boolean,
            'name' => $this->faker->name,
            'description' => $this->faker->text,
            'logger_type_id' => \App\Models\ProcessData\LoggerType::factory(),
            'ip_address' => $this->faker->word,
            'port' => $this->faker->randomNumber(),
        ];
    }
}
