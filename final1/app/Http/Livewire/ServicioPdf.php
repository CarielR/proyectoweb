<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Servicio;

class ServicioPdf extends Component
{
    public function index()
    {
        $servicios=Servicio::all();
        return view('servicio',compact('servicios'));
    }
    public function render()
    {
        return view('livewire.servicio-pdf');
    }
}
