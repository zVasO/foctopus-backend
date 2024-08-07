<?php

namespace Database\Factories;

use App\Models\Sound;
use App\Models\SoundCategory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Model;

/**
 * @extends Factory<Sound>
 */
class SoundFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var class-string<Model>
     */
    protected $model = Sound::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->word,
            'audio_file_path' => fake()->url,
            'sound_category_id' => SoundCategory::inRandomOrder()->first()->id,
        ];
    }
}
