<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Evento;

class Eventos extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $nombre_event, $descripcion_event, $fecha_event, $horas_event, $ubicacion_event, $observacion_event;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.eventos.view', [
            'eventos' => Evento::latest()
						->orWhere('nombre_event', 'LIKE', $keyWord)
						->orWhere('descripcion_event', 'LIKE', $keyWord)
						->orWhere('fecha_event', 'LIKE', $keyWord)
						->orWhere('horas_event', 'LIKE', $keyWord)
						->orWhere('ubicacion_event', 'LIKE', $keyWord)
						->orWhere('observacion_event', 'LIKE', $keyWord)
						->paginate(10),
        ]);
    }
	
    public function cancel()
    {
        $this->resetInput();
    }
	
    private function resetInput()
    {		
		$this->nombre_event = null;
		$this->descripcion_event = null;
		$this->fecha_event = null;
		$this->horas_event = null;
		$this->ubicacion_event = null;
		$this->observacion_event = null;
    }

    public function store()
    {
        $this->validate([
		'nombre_event' => 'required',
		'descripcion_event' => 'required',
		'fecha_event' => 'required',
		'horas_event' => 'required',
		'ubicacion_event' => 'required',
		'observacion_event' => 'required',
        ]);

        Evento::create([ 
			'nombre_event' => $this-> nombre_event,
			'descripcion_event' => $this-> descripcion_event,
			'fecha_event' => $this-> fecha_event,
			'horas_event' => $this-> horas_event,
			'ubicacion_event' => $this-> ubicacion_event,
			'observacion_event' => $this-> observacion_event
        ]);
        
        $this->resetInput();
		$this->dispatchBrowserEvent('closeModal');
		session()->flash('message', 'Evento Successfully created.');
    }

    public function edit($id)
    {
        $record = Evento::findOrFail($id);
        $this->selected_id = $id; 
		$this->nombre_event = $record-> nombre_event;
		$this->descripcion_event = $record-> descripcion_event;
		$this->fecha_event = $record-> fecha_event;
		$this->horas_event = $record-> horas_event;
		$this->ubicacion_event = $record-> ubicacion_event;
		$this->observacion_event = $record-> observacion_event;
    }

    public function update()
    {
        $this->validate([
		'nombre_event' => 'required',
		'descripcion_event' => 'required',
		'fecha_event' => 'required',
		'horas_event' => 'required',
		'ubicacion_event' => 'required',
		'observacion_event' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Evento::find($this->selected_id);
            $record->update([ 
			'nombre_event' => $this-> nombre_event,
			'descripcion_event' => $this-> descripcion_event,
			'fecha_event' => $this-> fecha_event,
			'horas_event' => $this-> horas_event,
			'ubicacion_event' => $this-> ubicacion_event,
			'observacion_event' => $this-> observacion_event
            ]);

            $this->resetInput();
            $this->dispatchBrowserEvent('closeModal');
			session()->flash('message', 'Evento Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            Evento::where('id', $id)->delete();
        }
    }
}