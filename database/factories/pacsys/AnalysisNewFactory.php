<?php

namespace Database\Factories\Pacsys;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Pacsys\AnalysisNew;

class AnalysisNewFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var  string
    */
    protected $model = AnalysisNew::class;

    /**
    * Define the model's default state.
    *
    * @return  array
    */
    public function definition(): array
    {
        return [
            'RecordName' => $this->faker->word,
            'FormName' => $this->faker->word,
            'Date' => $this->faker->dateTime(),
            'Value1' => $this->faker->word,
            'Value2' => $this->faker->word,
            'Value3' => $this->faker->word,
            'Value4' => $this->faker->word,
            'Value5' => $this->faker->word,
            'Value6' => $this->faker->word,
            'Value7' => $this->faker->word,
            'Value8' => $this->faker->word,
            'Value9' => $this->faker->word,
            'Value10' => $this->faker->word,
            'Value11' => $this->faker->word,
            'Value12' => $this->faker->word,
            'Value13' => $this->faker->word,
            'Value14' => $this->faker->word,
            'Value15' => $this->faker->word,
            'Value16' => $this->faker->word,
            'Value17' => $this->faker->word,
            'Value18' => $this->faker->word,
            'Value19' => $this->faker->word,
            'Value20' => $this->faker->word,
            'Tank' => $this->faker->word,
            'EmpCode' => $this->faker->word,
            'TimeStamp' => $this->faker->dateTime(),
            'DeleteVisible' => $this->faker->boolean,
            'Label' => $this->faker->word,
        ];
    }
}
