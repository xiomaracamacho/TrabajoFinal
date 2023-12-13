<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Administrador;

class RegistrarAdministradores extends Controller
{
    public function index(){
        return view('auth.administrador');
    }
    
    public function store(Request $request)
    {
            $request -> validate([
                'nombreA' => 'required|max:15',
                'apellidoA' => 'required|max:10',
                'IdenA' => 'required|unique:administrador|max:20',
                'EmailA' => 'required|unique:administrador|max:20',
                'password' => 'required|max:10'
            ]);
            Administrador::create([
                'nombreA' => $request->nombreA,
                'apellidoA' => $request->apellidoA,
                'IdenA' => $request->IdenA,
                'EmailA' => $request->EmailA,
                'password' => $request->password
            ]);   
    
            session()->flash('registro_exitoso', '¡Registro exitoso!');
            return redirect('administrador');
    }
}
