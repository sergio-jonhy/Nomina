@extends('layouts.plantilla')

@section('title', 'Inicio')

@section('content')
    <div class="container">
        <p class="text-2xl inline-block">Lista de empelados</p>
        <a href="" class="inline-block text-sm px-2 py-1 border rounded text-black border-black hover:bg-black hover:text-white">Agregar Empleado</a>
        <br><br>

        <table class="table w-full">
            <thead class="border-2 border-black">
              <tr>
                <th class="w-1/6">id</th>
                <th class="w-2/6">Nombre</th>
                <th class="w-1/6">Estado</th>
                <th class="w-2/6">Acciones</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($empleados as $empleado)
                    <tr class="border-2 border-black text-center">
                        <td class="border-2 border-black">{{$empleado->id}}</td>
                        <td class="border-2 border-black">{{$empleado->nombre.' '.$empleado->apellido_p.' '.$empleado->apellido_m }}</td>
                        <td>{{$empleado->estado}}</td>
                        <td class="border-2 border-black">
                            <a class="inline-block text-sm px-2 py-1 border rounded text-black border-black hover:bg-black hover:text-white">Ver</a>
                            <a class="inline-block text-sm px-2 py-1 border rounded text-black border-black hover:bg-black hover:text-white">Editar</a>
                            <!--condicion para evaluar que tipo de estado se encuentra y ofrecer la opcion de cambiar por el estado opuesto-->
                            @if ($empleado->estado == 'activo')
                                <button type="button" class="inline text-sm px-2 py-1 border rounded text-black border-black hover:bg-black hover:text-white">Desactivar</button>
                            @else
                                <button type="button" class="inline text-sm px-2 py-1 border rounded text-black border-black hover:bg-black hover:text-white">Activar</button>
                            @endif

                            <button type="button" class="inline text-sm px-2 py-1 border rounded text-black border-black hover:bg-black hover:text-white">Eliminar</button>
                            
                        </td>
                    </tr>
                @endforeach
               
            </tbody>
          </table>
          {{$empleados->links()}}
    </div>
   
@endsection
