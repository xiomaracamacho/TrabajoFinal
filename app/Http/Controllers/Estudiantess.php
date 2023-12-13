<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;

class Estudiantess extends Controller
{
    public function index()
    {
        $estudianteR = Estudiante::all();
        return view('estudianteR', ['estudianteR' => $estudianteR]);
    }
}
