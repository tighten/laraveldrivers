<?php

namespace Database\Factories;

use App\Driver;
use App\Type;
use Illuminate\Database\Eloquent\Factories\Factory;

class DriverFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Driver::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence,
            'url' => $this->faker->url,
            'type_id' => function () {
                return Type::factory()->create()->id;
            },
        ];
    }
}
