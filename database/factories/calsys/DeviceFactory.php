<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Calsys\Device;

class DeviceFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var  string
    */
    protected $model = Device::class;

    /**
    * Define the model's default state.
    *
    * @return  array
    */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'description' => $this->faker->text,
            'sourceID' => \App\Models\Calsys\Source::factory(),
            'typeID' => \App\Models\Calsys\Type::factory(),
            'initDate' => $this->faker->dateTime(),
            'period' => $this->faker->word,
            'location' => $this->faker->word,
            'ownerID' => \App\Models\Calsys\Owner::factory(),
            'serialNumber' => $this->faker->word,
            'timeStamp' => $this->faker->dateTime(),
            'periodID' => \App\Models\Calsys\Period::factory(),
            'locationID' => \App\Models\Calsys\Location::factory(),
        ];
    }
}
