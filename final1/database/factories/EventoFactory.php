<?php

namespace Database\Factories;

use App\Models\Evento;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class EventoFactory extends Factory
{
    protected $model = Evento::class;

    public function definition()
    {
        return [
			'nombre_event' => $this->faker->name,
			'descripcion_event' => $this->faker->name,
			'fecha_event' => $this->faker->name,
			'horas_event' => $this->faker->name,
			'ubicacion_event' => $this->faker->name,
			'observacion_event' => $this->faker->name,
        ];
    }
}
