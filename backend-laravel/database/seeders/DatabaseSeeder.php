<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            UtilisateurSeeder::class,
            ServiceSeeder::class,
            ReservationSeeder::class,
            PaiementSeeder::class,
            AvisSeeder::class,
            ReclamationSeeder::class,
        ]);
    }
}

