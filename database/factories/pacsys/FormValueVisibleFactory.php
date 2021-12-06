<?php

namespace Database\Factories\Pacsys;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Pacsys\FormValueVisible;

class FormValueVisibleFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var  string
    */
    protected $model = FormValueVisible::class;

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
            'Visible1' => $this->faker->boolean,
            'Visible2' => $this->faker->boolean,
            'Visible3' => $this->faker->boolean,
            'Visible4' => $this->faker->boolean,
            'Visible5' => $this->faker->boolean,
            'Visible6' => $this->faker->boolean,
            'Visible7' => $this->faker->boolean,
            'Visible8' => $this->faker->boolean,
            'Visible9' => $this->faker->boolean,
            'Visible10' => $this->faker->boolean,
            'Visible11' => $this->faker->boolean,
            'Visible12' => $this->faker->boolean,
            'Visible13' => $this->faker->boolean,
            'Visible14' => $this->faker->boolean,
            'Visible15' => $this->faker->boolean,
            'Visible16' => $this->faker->boolean,
            'Visible17' => $this->faker->boolean,
            'Visible18' => $this->faker->boolean,
            'Visible19' => $this->faker->boolean,
            'Visible20' => $this->faker->boolean,
            'Tank' => $this->faker->boolean,
            'TimeStamp' => $this->faker->dateTime(),
        ];
    }
}
