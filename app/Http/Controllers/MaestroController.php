<?php

namespace App\Http\Controllers;


use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Maestro;


class MaestroController extends Controller
{
    public function index(){
        return view('auth.maestro');
    }
    
    public function store(Request $request)
    {
            $request -> validate([
                'nombreP' => 'required|max:20',
                'apellido' => 'required|max:10',
                'IdenP' => 'required|unique:maestros|max:20',
                'emailP' => 'required|unique:maestros|max:20',
                'areaP' => 'required|unique:maestros|max:15'
            ]);
            Maestro::create([
                'nombreP' => $request->nombreP,
                'apellido' => $request->apellido,
                'IdenP' => $request->IdenP,
                'emailP' => $request->emailP,
                'areaP' => $request->areaP
            ]);   

    
            session()->flash('registro_exitoso', '¡Registro exitoso!');
            return redirect('maestro');
    }
}
