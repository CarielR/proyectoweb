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
        $contactos= SacarDatos::pluck('contactos')->toArray();
        $email=SacarDatos::pluck('email')->toArray();
        $quienes_s=SacarDatos::pluck('quienes_somos')->toArray();
        $cult_org=SacarDatos::pluck('Cultura_Org')->toArray();
        // Realiza las operaciones que necesites con el campo obtenido
        return view('welcome', compact('vision','mision','contactos','email','quienes_s','cult_org'));
    }
}
