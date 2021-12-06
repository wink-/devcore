<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\ProcessData\Volt;

class VoltFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var  string
    */
    protected $model = Volt::class;

    /**
    * Define the model's default state.
    *
    * @return  array
    */
    public function definition(): array
    {
        return [
            'record_id' => \App\Models\ProcessData\Record::factory(),
            'volt' => $this->faker->randomFloat(),
        ];
    }
}
