@extends('layouts.app')

@section('titulo')

@endsection

@section('contenido')
    <h1 class="text-4xl text-center font-bold mb-8 text-black">Acciones del Administrador</h1>

    <div class="flex flex-col items-center mb-4">
        <!-- Contenedor para la imagen  -->
        <div class="mx-auto text-center">
            <img src="{{ asset('imagenes/universidades.jpg') }}" alt="Imagen de registro" class="w-1/2 mb-4 mx-auto">
        </div>

        <!-- Contenedor para los botones -->
        <div class="flex flex-col items-center">
      
            <div class="flex mb-4">
                <a href="{{ route('estudianteD') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded mr-2">
                    Datos Estudiantes
                </a>
                
            </div>
        </div>
    </div>
    <a href="{{ route('administradorR') }}" class="bg-sky-700  hover:bg-sky-900 text-white font-bold py-2 px-4 rounded">
        Volver
    </a>
@endsection
