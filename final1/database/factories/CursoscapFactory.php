<?php

namespace Database\Factories;

use App\Models\Cursoscap;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CursoscapFactory extends Factory
{
    protected $model = Cursoscap::class;

    public function definition()
    {
        return [
			'cliente_id' => $this->faker->name,
			'nombre_cursoscaps' => $this->faker->name,
			'descipcion_cursoscaps' => $this->faker->name,
			'publicacion_cursoscaps' => $this->faker->name,
			'edadmin_cursoscaps' => $this->faker->name,
			'edadmax_cursoscaps' => $this->faker->name,
			'link_cursoscaps' => $this->faker->name,
			'cupos_cursoscaps' => $this->faker->name,
			'costo_cursoscaps' => $this->faker->name,
        ];
    }
}
