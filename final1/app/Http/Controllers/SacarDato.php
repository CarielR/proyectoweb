<?php

namespace App\Http\Controllers;

use App\Models\SacarDatos;
use Illuminate\Http\Request;

class SacarDato extends Controller
{
    //
    public function index()
    {
        $vision = SacarDatos::pluck('vision')->toArray();
        $mision = SacarDatos::pluck('mision')->toArray();
        // Realiza las operaciones que necesites con el campo obtenido
        return view('welcome', compact('vision','mision'));
    }
}
