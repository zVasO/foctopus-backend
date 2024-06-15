<?php

namespace Database\Factories;

use App\Models\Noise;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Model;

/**
 * @extends Factory<Noise>
 */
class NoiseFactory extends Factory
{

    /**
     * The name of the factory's corresponding model.
     *
     * @var class-string<Model>
     */
    protected $model = Noise::class;

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
            'icon_svg_file_path' => fake()->optional(0.9, null)->url,
        ];
    }
}
