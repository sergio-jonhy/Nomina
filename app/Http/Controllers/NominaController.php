<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEmployee;
use App\Models\Employee;
use Illuminate\Http\Request;

class NominaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empleados = Employee::orderBy('nombre', 'ASC')->paginate();
        return view('nomina.index', compact('empleados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('nomina.create');
    }
    //se implementa la validacion mediante un Form request
    public function store(StoreEmployee $request)
    {
        $empleado = Employee::create($request->all());
        return redirect()->route('nomina.ver', $empleado);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $empleado)
    {
        return view('nomina.show', compact('empleado'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $empleado)
    {
        return view('nomina.edit', compact('empleado'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreEmployee $request, Employee $empleado)
    {
        $empleado->update($request->all());
        return redirect()->route('nomina.ver', $empleado);
    }

    public function state(Request $request, Employee $empleado)
    {
        $empleado->estado = $request->estado;
        $empleado->save();
        return redirect()->route('nomina.lista');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $empleado)
    {
        $empleado->delete();
        return redirect()->route('nomina.lista');
    }
}
