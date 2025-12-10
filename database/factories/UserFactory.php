<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $gender = fake()->randomElement(['male', 'female']);

        // asignar foto según género (admite 'male'/'female' y variantes como 'Hombre'/'Mujer')
        $photo = ($gender === 'male' || strtolower($gender) === 'hombre')
            ? 'https://randomuser.me/api/portraits/men/' . rand(1, 99) . '.jpg'
            : 'https://randomuser.me/api/portraits/women/' . rand(1, 99) . '.jpg';

        return [
            'document'          => fake()->numerify('75#######'),
            'fullname'          => fake()->firstName($gender) . ' ' . fake()->lastName(),
            'gender'            => $gender,
            'birthdate'         => fake()->date(),
            'photo'             => $photo,
            'phone'             => fake()->numerify('3#########'),
            'email'             => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password'          => static::$password ??= Hash::make('password'),
            'remember_token'    => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn(array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
