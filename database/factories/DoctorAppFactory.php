<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DoctorApp>
 */
class DoctorAppFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "doctor"=>$this->faker->numberBetween(0, 2),
            "room"=>$this->faker->numerify('room-###'),
            "time"=>$this->faker->dateTimeAD()
        ];
    }
}
