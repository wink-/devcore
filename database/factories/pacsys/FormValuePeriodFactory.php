<?php

namespace Database\Factories\Pacsys;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Pacsys\FormValuePeriod;

class FormValuePeriodFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var  string
    */
    protected $model = FormValuePeriod::class;

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
            'Period1' => $this->faker->word,
            'Period2' => $this->faker->word,
            'Period3' => $this->faker->word,
            'Period4' => $this->faker->word,
            'Period5' => $this->faker->word,
            'Period6' => $this->faker->word,
            'Period7' => $this->faker->word,
            'Period8' => $this->faker->word,
            'Period9' => $this->faker->word,
            'Period10' => $this->faker->word,
            'Period11' => $this->faker->word,
            'Period12' => $this->faker->word,
            'Period13' => $this->faker->word,
            'Period14' => $this->faker->word,
            'Period15' => $this->faker->word,
            'Period16' => $this->faker->word,
            'Period17' => $this->faker->word,
            'Period18' => $this->faker->word,
            'Period19' => $this->faker->word,
            'Period20' => $this->faker->word,
            'Tank' => $this->faker->word,
            'TimeStamp' => $this->faker->dateTime(),
        ];
    }
}
