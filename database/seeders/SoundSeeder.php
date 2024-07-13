<?php

namespace Database\Seeders;

use App\Models\Sound;
use Illuminate\Database\Seeder;

class SoundSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Sound::factory(10)->create();
    }
}
