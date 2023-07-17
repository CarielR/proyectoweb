<?php

namespace Database\Factories;

use App\Models\Datoshome;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class DatoshomeFactory extends Factory
{
    protected $model = Datoshome::class;

    public function definition()
    {
        return [
			'vision' => $this->faker->name,
			'mision' => $this->faker->name,
			'contactos' => $this->faker->name,
			'email' => $this->faker->name,
			'quienes_somos' => $this->faker->name,
			'Cultura_Org' => $this->faker->name,
        ];
    }
}
