<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Calsys\Calibration;

class CalibrationFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var  string
    */
    protected $model = Calibration::class;

    /**
    * Define the model's default state.
    *
    * @return  array
    */
    public function definition(): array
    {
        return [
            'deviceID' => $this->faker->word,
            'calibratedByID' => $this->faker->word,
            'employeeID' => $this->faker->word,
            'calDate' => $this->faker->dateTime(),
            'calDue' => $this->faker->dateTime(),
            'status' => $this->faker->word,
            'record' => $this->faker->word,
            'timeStamp' => $this->faker->dateTime(),
        ];
    }
}
