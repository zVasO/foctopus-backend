<?php

namespace Database\Seeders;

use App\Models\Noise;
use Illuminate\Database\Seeder;

class NoiseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Noise::factory(10)->create();
    }
}
