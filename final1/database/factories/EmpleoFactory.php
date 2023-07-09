<?php

namespace Database\Factories;

use App\Models\Empleo;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class EmpleoFactory extends Factory
{
    protected $model = Empleo::class;

    public function definition()
    {
        return [
			'cliente_id' => $this->faker->name,
			'nombre_emp' => $this->faker->name,
			'descripcion_emp' => $this->faker->name,
			'modalidad_emp' => $this->faker->name,
			'horario_emp' => $this->faker->name,
			'fechapub_emp' => $this->faker->name,
			'experiencia_emp' => $this->faker->name,
        ];
    }
}
