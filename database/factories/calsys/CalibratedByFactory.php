<?php

namespace Database\Factories\Calsys;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Calsys\CalibratedBy;

class CalibratedByFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var  string
    */
    protected $model = CalibratedBy::class;

    /**
    * Define the model's default state.
    *
    * @return  array
    */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
        ];
    }
}
