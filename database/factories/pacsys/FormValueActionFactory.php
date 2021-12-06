<?php

namespace Database\Factories\Pacsys;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Pacsys\FormValueAction;

class FormValueActionFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var  string
    */
    protected $model = FormValueAction::class;

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
            'Action1' => $this->faker->boolean,
            'Action2' => $this->faker->boolean,
            'Action3' => $this->faker->boolean,
            'Action4' => $this->faker->boolean,
            'Action5' => $this->faker->boolean,
            'Action6' => $this->faker->boolean,
            'Action7' => $this->faker->boolean,
            'Action8' => $this->faker->boolean,
            'Action9' => $this->faker->boolean,
            'Action10' => $this->faker->boolean,
            'Action11' => $this->faker->boolean,
            'Action12' => $this->faker->boolean,
            'Action13' => $this->faker->boolean,
            'Action14' => $this->faker->boolean,
            'Action15' => $this->faker->boolean,
            'Action16' => $this->faker->boolean,
            'Action17' => $this->faker->boolean,
            'Action18' => $this->faker->boolean,
            'Action19' => $this->faker->boolean,
            'Action20' => $this->faker->boolean,
            'Tank' => $this->faker->boolean,
            'TimeStamp' => $this->faker->dateTime(),
        ];
    }
}
