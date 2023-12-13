<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Estudiante;


class RegistrarEstudiante extends Controller

{
    public function index(){
        return view('auth.estudiante');
    }
    
    public function store(Request $request)
    {
            $request -> validate([
                'nombreE' => 'required|max:20',
                'apellidoE' => 'required|max:10',
                'IdenE' => 'required|unique:estudiantes|max:20',
                'EmailE' => 'required|unique:estudiantes|max:20',
                'FeNaciE' => 'required|max:12',
                'DireccionE'=>'required|max:15',
                'password' => 'required|max:10'
            ]);
            Estudiante::create([
                'nombreE' => $request->nombreE,
                'apellidoE' => $request->apellidoE,
                'IdenE' => $request->IdenE,
                'EmailE' => $request->EmailE,
                'FeNaciE' => $request->FeNaciE,
                'DireccionE' => $request->DireccionE,
                'password' => $request->password
            ]);   

    
            session()->flash('registro_exitoso', '¡Registro exitoso!');
            return redirect('estudiante');
    }
}
