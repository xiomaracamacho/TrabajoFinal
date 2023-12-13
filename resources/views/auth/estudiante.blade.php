@extends('layouts.app')

@section('titulo')

@endsection

@section('contenido')
<h1 class="text-4xl text-center font-bold mb-4 text-black">Registro de Estudiantes</h1>

<div class="flex justify-center items-center">
    
    <div class="md:w-1/2 bg-white p-10 rounded-lg shadow-xl">

                    <!-- para mi alerta -->
    @if(Session::has('registro_exitoso'))
        <div class="flex justify-center items-center">
            <div class="bg-green-500 text-white p-3 mb-4 rounded-lg">
            {{ Session::get('registro_exitoso') }}
            </div>
         </div>
    @endif

        <form action="{{ route('estudianteR') }}" method="POST">
            @csrf

            <div class="mb-5">
                <label for="nombreE" class="mb-2 block uppercase text-gray-700 font-bold">Nombre</label>
                <input id="nombreE" name="nombreE" placeholder="Ingrese su Nombre" type="text" class="border p-3 w-full rounded-lg bg-gray-100">
                @error('nombreE')
                    <p class="text-white text-center my-2 p-2 bg-red-400 rounded-lg text-sm" >{{$message}}</p>
                @enderror
            </div>

            <div class="mb-5">
                <label for="apellidoE" class="mb-2 block uppercase text-gray-700 font-bold">Apellido</label>
                <input id="apellidoE" name="apellidoE" placeholder="Ingrese su Apellido" type="text" class="border p-3 w-full rounded-lg bg-gray-100">
                @error('apellidoE')
                    <p class="text-white text-center my-2 p-2 bg-red-400 rounded-lg text-sm" >{{$message}}</p>
                @enderror
            </div>

            <div class="mb-5">
                <label for="IdenE" class="mb-2 block uppercase text-gray-700 font-bold">Cedula</label>
                <input id="IdenE" name="IdenE" placeholder="Ingrese su número de Cedula" type="number" class="border p-3 w-full rounded-lg bg-gray-100">
                @error('IdenE')
                    <p class="text-white text-center my-2 p-2 bg-red-400 rounded-lg text-sm" >{{$message}}</p>
                @enderror
            </div>

            <div class="mb-5">
                <label for="EmailE" class="mb-2 block uppercase text-gray-700 font-bold">Email</label>
                <input id="EmailE" name="EmailE" placeholder="Ingrese su Email" type="text" class="border p-3 w-full rounded-lg bg-gray-100">
                @error('EmailE')
                    <p class="text-white text-center my-2 p-2 bg-red-400 rounded-lg text-sm" >{{$message}}</p>
                @enderror
            </div>

            <div class="mb-5">
                <label for="FeNaciE" class="mb-2 block uppercase text-gray-700 font-bold">Fecha Nacimiento</label>
                <input id="FeNaciE" name="FeNaciE" placeholder="Ingrese su fecha de Nacimiento" type="date" class="border p-3 w-full rounded-lg bg-gray-100">
                @error('FeNaciE')
                    <p class="text-white text-center my-2 p-2 bg-red-400 rounded-lg text-sm" >{{$message}}</p>
                @enderror
            </div>

            <div class="mb-5">
                <label for="DireccionE" class="mb-2 block uppercase text-gray-700 font-bold">Dirección</label>
                <input id="DireccionE" name="DireccionE" placeholder="Ingrese su Dirección" type="text" class="border p-3 w-full rounded-lg bg-gray-100">
                @error('DireccionE')
                    <p class="text-white text-center my-2 p-2 bg-red-400 rounded-lg text-sm" >{{$message}}</p>
                @enderror
            </div>

            <div class="mb-5">
                <label for="password" class="mb-2 block uppercase text-gray-700 font-bold">Contraseña</label>
                <input id="password" name="password" placeholder="Ingrese su Contraseña" type="password" class="border p-3 w-full rounded-lg bg-gray-100">
                @error('password')
                    <p class="text-white text-center my-2 p-2 bg-red-400 rounded-lg text-sm" >{{$message}}</p>
                @enderror
            </div>

            <input type="submit" value="Registrar" class="bg-sky-700 hover:bg-sky-900 w-full p-3 text-white rounded-lg uppercase">
        </form>

        <div><br></div>
        <a href="{{ route('auth.principal') }}" class="bg-blue-600 hover:bg-blue-800 text-white font-bold py-2 px-4 rounded mr-4">
                Volver
            </a>
    </div>
</div>

@endsection
