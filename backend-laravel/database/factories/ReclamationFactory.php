<?php

// database/factories/ReclamationFactory.php

namespace Database\Factories;

use App\Models\Reclamation;
use App\Models\Utilisateur;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReclamationFactory extends Factory
{
    protected $model = Reclamation::class;

    public function definition(): array
    {
        return [
            'utilisateur_id' => Utilisateur::factory(),
            'message' => $this->faker->paragraph, // correspond à ta migration
            'statut' => $this->faker->randomElement(['ouvert', 'ferme']),
        ];
    }
}

