<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Administrador;

class AccionesA extends Controller
{
    public function index()
    {
        $acciones = Administrador::all();
        return view('acciones', ['acciones' => $acciones]);
}
}
