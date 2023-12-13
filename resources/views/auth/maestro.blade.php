@extends('layouts.app')

@section('titulo')

@endsection

@section('contenido')
<h1 class="text-4xl text-center font-bold mb-4 text-black">Registro de Maestros</h1>

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

        <form action="{{ route('maestro') }}" method="POST">
            @csrf

            <div class="mb-5">
                <label for="nombreP" class="mb-2 block uppercase text-gray-700 font-bold">Nombre</label>
                <input id="nombre" name="nombreP" placeholder="Ingrese su Nombre" type="text" class="border p-3 w-full rounded-lg bg-gray-100">
                @error('nombreP')
                    <p class="text-white text-center my-2 p-2 bg-red-400 rounded-lg text-sm" >{{$message}}</p>
                @enderror
            </div>

            <div class="mb-5">
                <label for="apellidoP" class="mb-2 block uppercase text-gray-700 font-bold">Apellido</label>
                <input id="apellidoP" name="apellidoP" placeholder="Ingrese su Apellido" type="text" class="border p-3 w-full rounded-lg bg-gray-100">
                @error('apellidoP')
                    <p class="text-white text-center my-2 p-2 bg-red-400 rounded-lg text-sm" >{{$message}}</p>
                @enderror
            </div>

            <div class="mb-5">
                <label for="IdenP" class="mb-2 block uppercase text-gray-700 font-bold">Cedula</label>
                <input id="IdenE" name="IdenP" placeholder="Ingrese su número de Cedula" type="number" class="border p-3 w-full rounded-lg bg-gray-100">
                @error('IdenP')
                    <p class="text-white text-center my-2 p-2 bg-red-400 rounded-lg text-sm" >{{$message}}</p>
                @enderror
            </div>

            <div class="mb-5">
                <label for="emailP" class="mb-2 block uppercase text-gray-700 font-bold">Email</label>
                <input id="emailP" name="emailP" placeholder="Ingrese su Email" type="text" class="border p-3 w-full rounded-lg bg-gray-100">
                @error('emailE')
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
