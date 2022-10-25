<?php

namespace Database\Factories;
use Illuminate\Support\Str;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Municipality>
 */
class MunicipalityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'municipio' => $title = $this->faker->name(),
            'slug' => Str::slug($title),
            'id_state' => rand(1,2),
            'image' => $this->faker->imageUrl(640,480,'city'),
        ];
    }
}
