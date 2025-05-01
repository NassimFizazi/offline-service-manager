<?php

namespace Database\Seeders;

use App\Models\Reclamation;
use Illuminate\Database\Seeder;

class ReclamationSeeder extends Seeder
{
    public function run(): void
    {
        Reclamation::factory()->count(5)->create();
    }
}

