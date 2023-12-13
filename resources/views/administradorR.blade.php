@extends('layouts.app')

@section('titulo')

@endsection

@section('contenido')
<a href="{{ route('acciones') }}" class="block">
    <h1 class="text-4xl text-center font-bold mb-4 text-black">Inicio Sesión Administradores</h1>

    <div class="flex justify-center items-center">
        
        <div class="md:w-1/2 bg-white p-10 rounded-lg shadow-xl">

                <div class="mb-5">
                    <label for="EmailA" class="mb-2 block uppercase text-gray-700 font-bold">Email</label>
                    <input id="EmailA" name="EmailA" placeholder="Ingrese su Email" type="text" class="border p-3 w-full rounded-lg bg-gray-100">
                    @error('EmailA')
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

                <input type="submit" value="Ingresar" class="bg-sky-700 hover:bg-sky-900 w-full p-3 text-white rounded-lg uppercase">
            </form>

            <div><br></div>
            <a href="{{ route('auth.principal') }}" class="bg-blue-600 hover:bg-blue-800 text-white font-bold py-2 px-4 rounded mr-4">
                    Volver
                </a>
        </div>
    </div>
</a>
@endsection
