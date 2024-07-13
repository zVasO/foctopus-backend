<?php

namespace Database\Factories;

use App\Models\SoundCategory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Model;

/**
 * @extends Factory<SoundCategory>
 */
class SoundCategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var class-string<Model>
     */
    protected $model = SoundCategory::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word,
            'icon_svg_file_path' => fake()->optional(0.9, null)->url,
        ];
    }
}
