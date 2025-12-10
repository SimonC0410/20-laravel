<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pet>
 */
class PetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'        => fake()->randomElement(array("Bella", "Luna", "Charlie", "Lucy", "Max", "Daisy", "Milo", "Lola", "Buddy", "Sadie",
                                                         "Bailey", "Oliver", "Maggie", "Tucker", "Chloe", "Rocky", "Sophie", "Bear", "Zoey", "Duke",
                                                         "Stella", "Jack", "Penny", "Cooper", "Rosie", "Harley", "Ruby", "Riley", "Leo", "Molly",
                                                         "Bentley", "Gracie", "Finn", "Coco", "Winston", "Ellie", "Zeus", "Lilly", "Jax", "Nala",
                                                         "Ollie", "Loki", "Abby", "Pepper", "Koda", "Hazel", "Toby", "Ginger", "Shadow", "Simba")),
            'kind'        => fake()->randomElement(array('Dog', 'Cat', 'Bird', 'Rabbit', 'Pig')),
            'weight'      => fake()->numerify('#.#'),
            'age'         => fake()->numerify('#'),
            'breed'       => fake()->colorName(),
            'location'    => fake()->city(),
            'description' => fake()->sentence(8)
        ];
    }
}
