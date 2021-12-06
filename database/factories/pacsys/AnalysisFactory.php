<?php

namespace Database\Factories\Pacsys;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Pacsys\Analysis;

class AnalysisFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var  string
    */
    protected $model = Analysis::class;

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
            'IDy' => $this->faker->word,
            'ActValue1' => $this->faker->word,
            'ActValue2' => $this->faker->word,
            'ActValue3' => $this->faker->word,
            'ActValue4' => $this->faker->word,
            'ActValue5' => $this->faker->word,
            'ActValue6' => $this->faker->word,
            'ActValue7' => $this->faker->word,
            'ActValue8' => $this->faker->word,
            'ActValue9' => $this->faker->word,
            'ActValue10' => $this->faker->word,
            'ActValue11' => $this->faker->word,
            'ActValue12' => $this->faker->word,
            'ActValue13' => $this->faker->word,
            'ActValue14' => $this->faker->word,
            'ActValue15' => $this->faker->word,
            'ActValue16' => $this->faker->word,
            'ActValue17' => $this->faker->word,
            'ActValue18' => $this->faker->word,
            'ActValue19' => $this->faker->word,
            'ActValue20' => $this->faker->word,
        ];
    }
}
