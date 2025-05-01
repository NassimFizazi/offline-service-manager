<?php

namespace Database\Factories;

use App\Models\Avis;
use App\Models\Reservation;
use Illuminate\Database\Eloquent\Factories\Factory;

class AvisFactory extends Factory
{
    protected $model = Avis::class;

    public function definition(): array
    {
        return [
            'reservation_id' => Reservation::factory(),
            'note' => $this->faker->numberBetween(1, 5),
            'commentaire' => $this->faker->sentence,
        ];
    }
}

