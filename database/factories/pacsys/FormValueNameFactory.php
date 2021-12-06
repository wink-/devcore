<?php

namespace Database\Factories\Pacsys;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Pacsys\FormValueName;

class FormValueNameFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var  string
    */
    protected $model = FormValueName::class;

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
            'Name1' => $this->faker->word,
            'Name2' => $this->faker->word,
            'Name3' => $this->faker->word,
            'Name4' => $this->faker->word,
            'Name5' => $this->faker->word,
            'Name6' => $this->faker->word,
            'Name7' => $this->faker->word,
            'Name8' => $this->faker->word,
            'Name9' => $this->faker->word,
            'Name10' => $this->faker->word,
            'Name11' => $this->faker->word,
            'Name12' => $this->faker->word,
            'Name13' => $this->faker->word,
            'Name14' => $this->faker->word,
            'Name15' => $this->faker->word,
            'Name16' => $this->faker->word,
            'Name17' => $this->faker->word,
            'Name18' => $this->faker->word,
            'Name19' => $this->faker->word,
            'Name20' => $this->faker->word,
            'Tank' => $this->faker->word,
            'TimeStamp' => $this->faker->dateTime(),
            'Blank' => $this->faker->word,
        ];
    }
}
