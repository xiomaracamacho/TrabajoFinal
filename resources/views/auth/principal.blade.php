@extends('layouts.app')

@section('titulo')

@endsection

@section('contenido')
    <h1 class="text-4xl text-center font-bold mb-8 text-black">Registros Universitarios</h1>

    <div class="flex flex-col items-center mb-4">
        <!-- Contenedor para la imagen  -->
        <div class="mx-auto text-center">
            <img src="{{ asset('imagenes/universidades.jpg') }}" alt="Imagen de registro" class="w-1/2 mb-4 mx-auto">
        </div>

        <!-- Contenedor para los botones -->
        <div class="flex flex-col items-center">
      
            <div class="flex mb-4">
                <a href="{{ route('estudiante') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded mr-2">
                    Registro Estudiante
                </a>

                <a href="{{ route('administrador') }}" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded mr-2">
                    Registro Administrador
                </a>

    
            <div class="flex">
                <a href="{{ route('estudianteR') }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded mr-2">
                    Ver Registro Estudiantes
                </a>

                <a href="{{ route('administradorR') }}" class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded">
                    Acciones Administrador
                </a>
            </div>
        </div>
    </div>
@endsection
