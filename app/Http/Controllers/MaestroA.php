<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Maestro;

class MaestroA extends Controller
{
    public function index()
    {
        $listaMaestro = Maestro::all();
        return view('listaMaestro', ['listaMaestro' => $listaMaestro]);
    }

    
    public function eliminarUsuario(Request $request, $id)
    {
        Maestro::destroy($id);

        return response()->json(['message' => 'Maestro eliminado con éxito']);
    }
}
