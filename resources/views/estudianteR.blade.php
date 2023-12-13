@extends('layouts.app')

@section('titulo')

@endsection

@section('contenido')
<h1 class="text-4xl text-center font-bold mb-4 text-black">Lista de usuarios</h1>

<table class="w-full border border-collapse">
    <thead>
        <tr class="bg-gray-400">
            <th class="border p-2">ID</th>
            <th class="border p-2">Nombre</th>
            <th class="border p-2">Apellido</th>
            <th class="border p-2">Identificación</th>
            <th class="border p-2">Email</th>
            <th class="border p-2">Fecha Nacimiento</th>
            <th class="border p-2">Dirección</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($estudianteR as $estudianteR)
            <tr>
                <td class="hover:bg-gray-200 cursor-pointer border p-2 text-center">{{ $estudianteR->id }}</td>
                <td class="hover:bg-gray-200 cursor-pointer border p-2 text-center">{{ $estudianteR->nombreE }}</td>
                <td class="hover:bg-gray-200 cursor-pointer border p-2 text-center">{{ $estudianteR->apellidoE }}</td>
                <td class="hover:bg-gray-200 cursor-pointer border p-2 text-center">{{ $estudianteR->IdenE }}</td>
                <td class="hover:bg-gray-200 cursor-pointer border p-2 text-center">{{ $estudianteR->EmailE }}</td>
                <td class="hover:bg-gray-200 cursor-pointer border p-2 text-center">{{ $estudianteR->FeNaciE }}</td>
                <td class="hover:bg-gray-200 cursor-pointer border p-2 text-center">{{ $estudianteR->DireccionE }}</td>
            </tr>
        @endforeach
    </tbody>
</table>


<div><br></div>
    <a href="{{ route('auth.principal') }}" class="bg-sky-700  hover:bg-sky-900 text-white font-bold py-2 px-4 rounded">
        Volver
    </a>

 


@endsection
