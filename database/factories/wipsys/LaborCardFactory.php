<?php

namespace Database\Factories\Wipsys;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Wipsys\LaborCard;

class LaborCardFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var  string
    */
    protected $model = LaborCard::class;

    /**
    * Define the model's default state.
    *
    * @return  array
    */
    public function definition(): array
    {
        return [
            'work_order_number' => $this->faker->randomNumber(),
            'employee_code' => $this->faker->word,
            'step_code' => $this->faker->word,
            'job_date' => $this->faker->dateTime(),
            'time_of_day' => $this->faker->dateTime(),
            'actual_hours' => $this->faker->randomFloat(),
            'man_hours' => $this->faker->randomFloat(),
            'actual_pieces' => $this->faker->randomFloat(),
            'equipment_code' => $this->faker->word,
            'equipment_quantity' => $this->faker->randomFloat(),
            'loads' => $this->faker->randomFloat(),
            'cycle_time' => $this->faker->randomFloat(),
            'time_finished' => $this->faker->dateTime(),
            'session_id' => $this->faker->word,
            'archive' => $this->faker->boolean,
            'revision' => $this->faker->randomNumber(),
            'number' => \App\Models\Wipsys\Workorder::factory(),
        ];
    }
}
