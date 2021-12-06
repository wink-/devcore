<?php

namespace Database\Factories\Pacsys;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Pacsys\Form;

class FormFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var  string
    */
    protected $model = Form::class;

    /**
    * Define the model's default state.
    *
    * @return  array
    */
    public function definition(): array
    {
        return [
            'Name' => $this->faker->word,
            'Description' => $this->faker->word,
            'FormType' => $this->faker->word,
            'TimeStamp' => $this->faker->dateTime(),
            'Archived' => $this->faker->boolean,
            'Revision' => $this->faker->word,
            'AnalysisProcedure' => $this->faker->word,
        ];
    }
}
