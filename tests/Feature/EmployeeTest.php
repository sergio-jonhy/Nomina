<?php

namespace Tests\Feature;

use App\Models\Employee;
use Carbon\Factory;
use Database\Factories\EmployeeFactory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EmployeeTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function list_of_employees_can_be_retrieved(){
        //mostrar los detalles de los errores
        $this->withoutExceptionHandling();
        //insertar 3 registros
        Employee::factory(3)->create();
        //consultar la url
        $response = $this->get('/');
        //verificar si la respuesta es correcta
        $response->assertOk();
        //llamar todos los registros de la tabla
        $empleados = Employee::all();
        //llamar la vista 
        $response->assertViewIs('nomina.index');
        //enviar los registros obtenidos
        $response->assertViewHas('empleados', $empleados);
    }

    /** @test */
    public function a_employee_can_be_created(){
        //mostrar los detalles de los errores
        $this->withoutExceptionHandling();
        //enviar parametros a la direccion nomina
        $response = $this->post('nomina', [
            'codigo' => '1234567891',
            'nombre' => 'Alfredo',
            'apellido_p' => 'Castillejo',
            'apellido_m' => 'Bermudez',
            'correo' => 'test123@gmail.com',
            'tipo_contrato' => 'Tiempo completo',
            'estado' => 'activo'
        ]);
        //revizars si se hizo correctamente
        $response->assertOk();
        //solicitar que retorne el registro realizado llamando toda la tabla
        $this->assertCount(1, Employee::all());
        $empleado = Employee::first();
        //comparar los valores recuperados con los que fueron enviados
        $this->assertEquals($empleado->codigo, '1234567891');
        $this->assertEquals($empleado->nombre, 'Alfredo');
        $this->assertEquals($empleado->apellido_p, 'Castillejo');
        $this->assertEquals($empleado->apellido_m, 'Bermudez');
        $this->assertEquals($empleado->correo, 'test123@gmail.com');
        $this->assertEquals($empleado->tipo_contrato, 'Tiempo completo');
        $this->assertEquals($empleado->estado, 'activo');
    }

    /** @test */
    public function a_employee_can_be_deleted(){
        //mostrar los detalles de los errores
        $this->withoutExceptionHandling();
        //insertar 1 registro
        Employee::factory(1)->create();
        //obtener el registro
        $empleado = Employee::first();
        //hacer la peticin de eliminacion al url y enviando el id del registro
        $response = $this->delete('nomina/'.$empleado->id);
        //verificar que no se cuente con ningun dato en la tabla
        $this->assertCount(0, Employee::all());
        //redireccionar a la vista principal
        $response->assertRedirect('/');

       
    }
}
