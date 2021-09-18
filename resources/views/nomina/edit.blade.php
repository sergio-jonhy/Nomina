@extends('layouts.plantilla')

@section('title', 'Editar Empleado')

@section('content')
    <div class="container">
        <p class="text-2xl inline-block">Editar empleado</p>
        <a href="{{route('nomina.ver', $empleado)}}" class="inline-block text-sm px-2 py-1 border rounded text-black border-black hover:bg-black hover:text-white">Regresar</a>

        <div class="py-4">
            <div class="mt-2 max-w-md">
                <div class="grid grid-cols-1 gap-6">
                    <form action="{{route('nomina.actualizar', $empleado)}}" method="post" class="inline-block">
                        @csrf
                        @method('put')
                        <label class="block">
                            <span class="text-gray-700">Codigo</span>
                            <input
                            type="text"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                            name="codigo" value="{{old('codigo',$empleado->codigo)}}"
                            />
                        </label>
                        @error('codigo')
                            <br>
                            <small>{{$message}}</small>
                            <br>
                        @enderror
                        <label class="block">
                            <span class="text-gray-700">Nombre</span>
                            <input
                            type="text"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                            name="nombre" value="{{old('nombre',$empleado->nombre)}}"
                            />
                        </label>
                        @error('nombre')
                            <br>
                            <small>{{$message}}</small>
                            <br>
                        @enderror
                        <label class="block">
                            <span class="text-gray-700">Apellido Paterno</span>
                            <input
                                type="text"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                            name="apellido_p"value="{{old('apellido_p',$empleado->apellido_p)}}"
                            />
                            </label>
                            @error('apellido_p')
                                <br>
                                <small>{{$message}}</small>
                                <br>
                            @enderror
                            <label class="block">
                            <span class="text-gray-700">Apellido Materno</span>
                            <input
                                type="text"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                name="apellido_m" value="{{old('apellido_m',$empleado->apellido_m)}}"
                            />
                            </label>
                            @error('apellido_m')
                                <br>
                                <small>{{$message}}</small>
                                <br>
                            @enderror
                        <label class="block">
                            <span class="text-gray-700">Correo</span>
                            <input
                            type="email"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                            name="correo"  value="{{old('correo',$empleado->correo)}}"
                            />
                        </label>
                        @error('correo')
                            <br>
                            <small>{{$message}}</small>
                            <br>
                        @enderror
                        <label class="block">
                            <span class="text-gray-700">Tipo de contrato</span>
                            <input
                                type="text"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                name="tipo_contrato" value="{{old('tipo_contrato', $empleado->tipo_contrato)}}"
                            />
                        </label>
                        @error('tipo_contrato')
                            <br>
                            <small>{{$message}}</small>
                            <br>
                        @enderror
                        <label class="block">
                            <span class="text-gray-700">Estado</span>
                            <select
                            class="block w-full mt-1 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                            name="estado">
                            <!--Se realiza una comparacion para omitir en el select la opcion que contiene el registro, evitando repetir opciones-->
                                <option>{{old('estado',$empleado->estado)}}</option>
                                @if ($empleado->estado != 'activo')
                                    <option value='activo'>activo</option>
                                @endif
                                @if ($empleado->estado != 'inactivo')
                                    <option value='inactivo'>inactivo</option>
                                @endif
                            </select>
                        </label>
                        @error('estado')
                            <br>
                            <small>{{$message}}</small>
                            <br>
                        @enderror
                        <br>
                        <button type="submit" class="border-2 rounded border-indigo-300 px-4 py-2">Actualizar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
