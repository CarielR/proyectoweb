<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SacarDatos extends Model
{
    use HasFactory;


    protected $table = 'datoshome';

    public function obtenerDatosWelcome()
    {
        $vision = SacarDatos::pluck('vision')->toArray();
        $mision = SacarDatos::pluck('mision')->toArray();
        // Realiza las operaciones que necesites con el campo obtenido
        return view('welcome', compact('vision','mision'));
    }


}
