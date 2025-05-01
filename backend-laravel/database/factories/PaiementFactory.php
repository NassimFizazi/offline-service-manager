<?php

namespace Database\Factories;

use App\Models\Paiement;
use App\Models\Reservation;
use Illuminate\Database\Eloquent\Factories\Factory;

class PaiementFactory extends Factory
{
    protected $model = Paiement::class;

    public function definition(): array
    {
        return [
            'reservation_id' => Reservation::factory(),
            'montant' => $this->faker->randomFloat(2, 10, 500),
            'date_paiement' => now(),
            'methode' => $this->faker->randomElement(['carte', 'espece', 'paypal']),
        ];
    }
}

