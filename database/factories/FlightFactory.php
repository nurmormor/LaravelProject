<?php

namespace Database\Factories;

use App\Models\Flight;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Flight>
 */
class FlightFactory extends Factory
{
    protected $model = Flight::class;

    public function definition()
    {
        return [
            'avión' => $this->faker->word(),
            'origen' => $this->faker->city(),
            'destino' => $this->faker->city(),
            'duracion' => $this->faker->randomDigit() . 'h ' . $this->faker->randomDigit() . 'm',
            'precio' => $this->faker->randomFloat(2, 100, 1000),
            'asientos' => $this->faker->randomElement(['1ª clase', '2ª clase', 'turista']),
            'fecha' => $this->faker->dateTime(),
            'estado' => $this->faker->randomElement(['borrador', 'en espera', 'completo', 'en trayecto']),
        ];
    }
}
