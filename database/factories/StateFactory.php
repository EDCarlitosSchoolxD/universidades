<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\State>
 */
class StateFactory extends Factory
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
            'estado' => $title = $this->faker->randomElement(['Quintana Roo','Yucatan']),
            'slug' => Str::slug($title),
            'image' => $this->faker->imageUrl(640,480,'city'),
        ];
    }
}
