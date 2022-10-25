<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Career>
 */
class CareerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
            //
            return [
                //
                'carera' => $carera = $this->faker->name(),
                'slug' => Str::slug($carera),
                'descripcion' => $this->faker->text(500),
                'objetivo' => $this->faker->text(500),
                'aprendizaje' => $this->faker->text(500),
                'trabajo' => $this->faker->text(500),
                'perfil_ingreso' => $this->faker->text(500),
                'perfil_egreso' => $this->faker->text(500),
                'plan_estudio' => $this->faker->text(500),
                'image' => $this->faker->imageUrl($category='technics'),
                'likes' => rand(1,300),
                'tipo' => $this->faker->randomElement(['Ingenieria','Licenciatura','Maestria']),
                'id_universidad' => rand(1,40),

            ];
    }
}
