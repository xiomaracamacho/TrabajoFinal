<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;

class Acciones extends Controller
{
    public function index()
    {
        $estudianteD = Estudiante::all();
        return view('estudianteD', ['estudianteD' => $estudianteD]);
    }

    
    public function eliminarUsuario(Request $request, $id)
    {
        Estudiante::destroy($id);

        return response()->json(['message' => 'Estudiante eliminado con éxito']);
    }
}
