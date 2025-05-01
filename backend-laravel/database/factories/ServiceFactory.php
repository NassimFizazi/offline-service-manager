<?php

namespace Database\Factories;

use App\Models\Service;
use App\Models\Utilisateur;
use Illuminate\Database\Eloquent\Factories\Factory;

class ServiceFactory extends Factory
{
    protected $model = Service::class;

    public function definition(): array
    {
        return [
            'titre' => $this->faker->words(3, true),
            'description' => $this->faker->paragraph(),
            'prix' => $this->faker->randomFloat(2, 10, 500),
            'statut' => 'disponible',
            'professionnel_id' => Utilisateur::where('type', 'professionnel')->inRandomOrder()->first()->id ?? Utilisateur::factory()->professionnel()->create()->id,
        ];
    }
}
