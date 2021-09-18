<?php

namespace Database\Factories;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Employee::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        /*
        Se generan los datos falsos para cada campo de la tabla employees
        */
        $nombre = $this->faker->unique()->firstName();
        $apellido = $this->faker->unique()->lastName();
        $correo = $nombre.$apellido.'@gmail.com';
        return [
            'codigo' => $this->faker->unique()->isbn10(),
            'nombre' => $nombre,
            'apellido_p' => $apellido,
            'apellido_m' => $this->faker->lastName(),
            'correo' => $correo,
            'tipo_contrato' => $this->faker->randomElement(['Tiempo Determinado', 'Tiempo Ideterminado', 'Periodo de Prueba', 'Capacitacion Inicial']),
            'estado' => $this->faker->randomElement(['activo', 'inactivo'])
        ];
    }
}
