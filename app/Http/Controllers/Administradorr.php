<?php

namespace App\Http\Controllers;
use App\Models\Administrador;

use Illuminate\Http\Request;

class Administradorr extends Controller
{
    public function index()
    {
        $administradorR = Administrador::all();
        return view('administradorR', ['administradorR' => $administradorR]);
}
}
