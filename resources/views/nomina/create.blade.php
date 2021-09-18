@extends('layouts.plantilla')

@section('title', 'Crear')

@section('content')
    <div class="container">
        <p class="text-2xl inline-block">Agregar nuevo empleado</p>
        <a href="{{route('nomina.lista')}}" class="inline-block text-sm px-2 py-1 border rounded text-black border-black hover:bg-black hover:text-white">Regresar a la lista</a>

        <div class="py-4">
            <div class="mt-2 max-w-md">
                <div class="grid grid-cols-1 gap-6">
                    <form action="{{route('nomina.guardar')}}" method="POST">
                        @csrf
                        <label class="block">
                            <span class="text-gray-700">Codigo</span>
                            <input
                            type="text"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                            name="codigo" value="{{old('codigo')}}"
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
                            name="nombre" value="{{old('nombre')}}"
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
                            name="apellido_p" value="{{old('apellido_p')}}"
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
                                name="apellido_m" value="{{old('apellido_m')}}"
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
                            placeholder="john@example.com" name="correo" value="{{old('correo')}}"
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
                                name="tipo_contrato" value="{{old('tipo_contrato')}}"
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
                                <option>activo</option>
                                <option>inactivo</option>
                            </select>
                        </label>
                        @error('estado')
                            <br>
                            <small>{{$message}}</small>
                            <br>
                        @enderror
                        <br>
                        <button type="submit" class="border-2 rounded border-indigo-300 px-4 py-2">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
