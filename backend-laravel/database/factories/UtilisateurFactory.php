<?php

namespace Database\Factories;

use App\Models\Utilisateur;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

class UtilisateurFactory extends Factory
{
    protected $model = Utilisateur::class;

    public function definition(): array
    {
        return [
            'nom' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'password' => Hash::make('password'),
            'type' => $this->faker->randomElement(['client', 'professionnel', 'administrateur']),
        ];
    }

    public function client(): static
    {
        return $this->state(fn() => ['type' => 'client']);
    }

    public function professionnel(): static
    {
        return $this->state(fn() => ['type' => 'professionnel']);
    }

    public function administrateur(): static
    {
        return $this->state(fn() => ['type' => 'administrateur']);
    }
}
