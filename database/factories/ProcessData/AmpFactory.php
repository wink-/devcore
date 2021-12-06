<?php

namespace Database\Factories\ProcessData;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\ProcessData\Amp;

class AmpFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var  string
    */
    protected $model = Amp::class;

    /**
    * Define the model's default state.
    *
    * @return  array
    */
    public function definition(): array
    {
        return [
            'record_id' => \App\Models\ProcessData\Record::factory(),
            'amp' => $this->faker->randomNumber(),
            'amp_minute' => $this->faker->randomNumber(),
        ];
    }
}
