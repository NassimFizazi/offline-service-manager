<?php

namespace Database\Seeders;

use App\Models\Avis;
use Illuminate\Database\Seeder;

class AvisSeeder extends Seeder
{
    public function run(): void
    {
        Avis::factory()->count(10)->create();
    }
}

