<?php

namespace Database\Seeders;

use App\Models\Utilisateur;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UtilisateurSeeder extends Seeder
{
    public function run(): void
    {
        Utilisateur::create([
            'nom' => 'Admin',
            'email' => 'admin@exemple.com',
            'password' => Hash::make('password'),
            'type' => 'administrateur',
        ]);

        Utilisateur::factory()->client()->count(10)->create();
        Utilisateur::factory()->professionnel()->count(5)->create();
        Utilisateur::factory()->administrateur()->count(2)->create();
    }
}

