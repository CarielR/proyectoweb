<?php

namespace Database\Factories;

use App\Models\Servicio;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ServicioFactory extends Factory
{
    protected $model = Servicio::class;

    public function definition()
    {
        return [
			'cliente_id' => $this->faker->name,
			'nombre_serv' => $this->faker->name,
			'descripcion_serv' => $this->faker->name,
			'precio_serv' => $this->faker->name,
        ];
    }
}
