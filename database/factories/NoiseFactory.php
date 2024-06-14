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
            'name' => fake()->name,
            'audio_file_path' => 'https://commondatastorage.googleapis.com/codeskulptor-demos/pyman_assets/ateapill.ogg',
            'icon_svg' => fake()->optional(0.9, null)->randomElements(self::getNoisesArray())
        ];
    }

    private static function getNoisesArray(): array
    {
        return [
            '<svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M21 15.5018C18.651 14.5223 17 12.2039 17 9.5C17 6.79774 18.6534 4.48062 21 3.5C20.2304 3.17906 19.3859 3 18.5 3C15.7977 3 13.4806 4.64899 12.5 6.9956M6.9 21C4.74609 21 3 19.2889 3 17.1781C3 15.4286 4.3 13.8125 6.25 13.5C6.86168 12.0617 8.30934 11 9.9978 11C12.1607 11 13.9285 12.6589 14.05 14.75C15.1978 15.2463 16 16.4645 16 17.7835C16 19.5599 14.5449 21 12.75 21L6.9 21Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>',
            '<svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M21 14.7C21 18.1794 19.0438 21 15.5 21C11.9562 21 10 18.1794 10 14.7C10 11.2206 15.5 3 15.5 3C15.5 3 21 11.2206 21 14.7Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M8 8.2C8 9.7464 7.11083 11 5.5 11C3.88917 11 3 9.7464 3 8.2C3 6.6536 5.5 3 5.5 3C5.5 3 8 6.6536 8 8.2Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>',
            '<svg viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><defs><style>.a{fill:none;stroke:#000000;stroke-linecap:round;stroke-linejoin:round;}</style></defs><path class="a" d="M24,4.5c0,3.9452-12,13.7174-12,27.4054A11.8025,11.8025,0,0,0,24,43.5,11.8025,11.8025,0,0,0,36,31.9054C36,18.2174,24,8.4452,24,4.5Z"></path></g></svg>',
        ];
    }

}
