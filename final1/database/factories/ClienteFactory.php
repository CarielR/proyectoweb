<?php

namespace Database\Factories;

use App\Models\Cliente;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ClienteFactory extends Factory
{
    protected $model = Cliente::class;

    public function definition()
    {
        return [
			'genero_id' => $this->faker->name,
			'nombre_cli' => $this->faker->name,
			'fecha_nac_cli' => $this->faker->name,
			'telefono1_cli' => $this->faker->name,
			'telefono2_cli' => $this->faker->name,
			'email_cli' => $this->faker->name,
			'titulo_cli' => $this->faker->name,
			'rol_cli' => $this->faker->name,
			'experiencia_cli' => $this->faker->name,
        ];
    }
}
