<?php

namespace Database\Factories;

use App\Models\Reservation;
use App\Models\Service;
use App\Models\Utilisateur;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReservationFactory extends Factory
{
    protected $model = Reservation::class;

    public function definition(): array
    {
        return [
            'client_id' => Utilisateur::factory()->client(),
            'service_id' => Service::factory(),
            'date_reservation' => $this->faker->dateTimeBetween('now', '+1 month'),
            'etat' => $this->faker->randomElement(['en_attente', 'confirmee', 'annulee']),

        ];
    }
}

