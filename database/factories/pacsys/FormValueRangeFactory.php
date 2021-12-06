<?php

namespace Database\Factories\Pacsys;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Pacsys\FormValueRange;

class FormValueRangeFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var  string
    */
    protected $model = FormValueRange::class;

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
            'min1' => $this->faker->word,
            'max1' => $this->faker->word,
            'min2' => $this->faker->word,
            'max2' => $this->faker->word,
            'min3' => $this->faker->word,
            'max3' => $this->faker->word,
            'min4' => $this->faker->word,
            'max4' => $this->faker->word,
            'min5' => $this->faker->word,
            'max5' => $this->faker->word,
            'min6' => $this->faker->word,
            'max6' => $this->faker->word,
            'min7' => $this->faker->word,
            'max7' => $this->faker->word,
            'min8' => $this->faker->word,
            'max8' => $this->faker->word,
            'min9' => $this->faker->word,
            'max9' => $this->faker->word,
            'min10' => $this->faker->word,
            'max10' => $this->faker->word,
            'min11' => $this->faker->word,
            'max11' => $this->faker->word,
            'min12' => $this->faker->word,
            'max12' => $this->faker->word,
            'min13' => $this->faker->word,
            'max13' => $this->faker->word,
            'min14' => $this->faker->word,
            'max14' => $this->faker->word,
            'min15' => $this->faker->word,
            'max15' => $this->faker->word,
            'min16' => $this->faker->word,
            'max16' => $this->faker->word,
            'min17' => $this->faker->word,
            'max17' => $this->faker->word,
            'min18' => $this->faker->word,
            'max18' => $this->faker->word,
            'min19' => $this->faker->word,
            'max19' => $this->faker->word,
            'min20' => $this->faker->word,
            'max20' => $this->faker->word,
            'Tank' => $this->faker->word,
            'TimeStamp' => $this->faker->dateTime(),
        ];
    }
}
