@extends('layouts.app')

@section('titulo')

@endsection

@section('contenido')
<h1 class="text-4xl text-center font-bold mb-4 text-black">Lista de Estudiantes</h1>

<table class="w-full border border-collapse">
    <thead>
        <tr class="bg-gray-300">
            <th class="border p-2">ID</th>
            <th class="border p-2">Nombre</th>
            <th class="border p-2">Apellidos</th>
            <th class="border p-2">Id_Estudiante</th>
            <th class="border p-2">Email</th>
            <th class="border p-2">F_Nacimiento</th>
            <th class="border p-2">Direccion</th>
            <th class="border p-2">Acción</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($estudianteD as $estudianteD)
            <tr>
                <td class="hover:bg-gray-200 cursor-pointer border p-2 text-center">{{ $estudianteD->id }}</td>
                <td class="hover:bg-gray-200 cursor-pointer border p-2 text-center">{{ $estudianteD->nombreE}}</td>
                <td class="hover:bg-gray-200 cursor-pointer border p-2 text-center">{{ $estudianteD->apellidoE }}</td>
                <td class="hover:bg-gray-200 cursor-pointer border p-2 text-center">{{ $estudianteD->IdenE}}</td>
                <td class="hover:bg-gray-200 cursor-pointer border p-2 text-center">{{ $estudianteD->EmailE }}</td>
                <td class="hover:bg-gray-200 cursor-pointer border p-2 text-center">{{ $estudianteD->FeNaciE}}</td>
                <td class="hover:bg-gray-200 cursor-pointer border p-2 text-center">{{ $estudianteD->DireccionE}}</td>
                <td class="cursor-pointer border p-2 text-center">
<button onclick="eliminarUsuario({{ $estudianteD ->id }})" class="bg-red-500 hover:bg-red-800 text-white font-bold py-2 px-4 rounded">
    Eliminar
</button>

<script>
    function eliminarUsuario(id) {
        if (confirm('¿Estás seguro de que deseas eliminar este usuario?')) {
            fetch(`/estudianteD/${id}`, {
                method: 'DELETE',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}', 
                },
            })
            .then(response => response.json())
            .then(data => {
                alert(data.message); 
            })
            .catch(error => console.error('Error al eliminar usuario:', error));
        }
    }
</script>

            
     @endforeach
    </tbody>
</table>


    <div><br></div>
    <a href="{{ route('acciones') }}" class="bg-sky-700  hover:bg-sky-900 text-white font-bold py-2 px-4 rounded">
        Volver
    </a>


@endsection
