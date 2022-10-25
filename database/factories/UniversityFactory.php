<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\University>
 */
class UniversityFactory extends Factory
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
            "nombre" => $name = $this->faker->name(),
            "tipo" => $this->faker->randomElement(['Privada','Publica']),
            "direccion" => $this->faker->streetName(),
            "telefono" => $this->faker->phoneNumber(),
            "url_web" => $this->faker->url(),
            "image" => $this->faker->imageUrl(),
            "slug" => Str::slug($name),
            "likes" => rand(10,1000),
            "id_municipio" => rand(1,20),
        ];
    }
}