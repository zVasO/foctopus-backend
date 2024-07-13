<?php

namespace Database\Seeders;

use App\Models\SoundCategory;
use Illuminate\Database\Seeder;

class SoundCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SoundCategory::factory(5)->create();
    }
}
