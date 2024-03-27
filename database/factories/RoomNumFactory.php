<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\RoomNum>
 */
class RoomNumFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "name"=>$this->faker->numerify('room-###'),
            "active"=>$this->faker->numberBetween(0, 2),
            "total"=>$this->faker->numerify("#"),
            "price"=>$this->faker->numerify("###")
        ];
    }
}
