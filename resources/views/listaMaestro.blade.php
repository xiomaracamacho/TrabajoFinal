@extends('layouts.app')

@section('titulo')

@endsection

@section('contenido')
<h1 class="text-4xl text-center font-bold mb-4 text-black">Lista de Maestros</h1>

<table class="w-full border border-collapse">
    <thead>
        <tr class="bg-gray-300">
            <th class="border p-2">ID</th>
            <th class="border p-2">Nombre</th>
            <th class="border p-2">Apellidos</th>
            <th class="border p-2">Id_Maestro</th>
            <th class="border p-2">Email</th>
            <th class="border p-2">Area Especialización</th>
            <th class="border p-2">Acción</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($listaMaestro as $listaMaestro)
            <tr>
                <td class="hover:bg-gray-200 cursor-pointer border p-2 text-center">{{ $listaMaestro->id }}</td>
                <td class="hover:bg-gray-200 cursor-pointer border p-2 text-center">{{ $listaMaestro->nombreP}}</td>
                <td class="hover:bg-gray-200 cursor-pointer border p-2 text-center">{{ $listaMaestro->apellido}}</td>
                <td class="hover:bg-gray-200 cursor-pointer border p-2 text-center">{{ $listaMaestro->IdenP}}</td>
                <td class="hover:bg-gray-200 cursor-pointer border p-2 text-center">{{ $listaMaestro->emailP}}</td>
                <td class="hover:bg-gray-200 cursor-pointer border p-2 text-center">{{ $listaMaestro->areaP}}</td>
                <td class="cursor-pointer border p-2 text-center">
<button onclick="eliminarUsuario({{ $listaMaestro ->id }})" class="bg-red-500 hover:bg-red-800 text-white font-bold py-2 px-4 rounded">
    Eliminar
</button>

<script>
    function eliminarUsuario(id) {
        if (confirm('¿Estás seguro de que deseas eliminar este Maestro?')) {
            fetch(`/listaMaestro/${id}`, {
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
            .catch(error => console.error('Error al eliminar Maestro:', error));
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
