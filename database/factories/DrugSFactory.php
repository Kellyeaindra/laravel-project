<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DrugS>
 */
class DrugSFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "drug"=>$this->faker->words(3,true),
            "gram"=>$this->faker->numberBetween(0, 2),
            "total"=>$this->faker->numerify("###"),
            "price"=>$this->faker->numberBetween(0, 2)
        ];
    }
}
