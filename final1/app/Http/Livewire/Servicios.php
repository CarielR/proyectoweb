<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Servicio;

class Servicios extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $cliente_id, $nombre_serv, $descripcion_serv, $precio_serv;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.servicios.view', [
            'servicios' => Servicio::latest()
						->orWhere('cliente_id', 'LIKE', $keyWord)
						->orWhere('nombre_serv', 'LIKE', $keyWord)
						->orWhere('descripcion_serv', 'LIKE', $keyWord)
						->orWhere('precio_serv', 'LIKE', $keyWord)
						->paginate(10),
        ]);
    }
	
    public function cancel()
    {
        $this->resetInput();
    }
	
    private function resetInput()
    {		
		$this->cliente_id = null;
		$this->nombre_serv = null;
		$this->descripcion_serv = null;
		$this->precio_serv = null;
    }

    public function store()
    {
        $this->validate([
		'cliente_id' => 'required',
		'nombre_serv' => 'required',
		'descripcion_serv' => 'required',
		'precio_serv' => 'required',
        ]);

        Servicio::create([ 
			'cliente_id' => $this-> cliente_id,
			'nombre_serv' => $this-> nombre_serv,
			'descripcion_serv' => $this-> descripcion_serv,
			'precio_serv' => $this-> precio_serv
        ]);
        
        $this->resetInput();
		$this->dispatchBrowserEvent('closeModal');
		session()->flash('message', 'Servicio Successfully created.');
    }

    public function edit($id)
    {
        $record = Servicio::findOrFail($id);
        $this->selected_id = $id; 
		$this->cliente_id = $record-> cliente_id;
		$this->nombre_serv = $record-> nombre_serv;
		$this->descripcion_serv = $record-> descripcion_serv;
		$this->precio_serv = $record-> precio_serv;
    }

    public function update()
    {
        $this->validate([
		'cliente_id' => 'required',
		'nombre_serv' => 'required',
		'descripcion_serv' => 'required',
		'precio_serv' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Servicio::find($this->selected_id);
            $record->update([ 
			'cliente_id' => $this-> cliente_id,
			'nombre_serv' => $this-> nombre_serv,
			'descripcion_serv' => $this-> descripcion_serv,
			'precio_serv' => $this-> precio_serv
            ]);

            $this->resetInput();
            $this->dispatchBrowserEvent('closeModal');
			session()->flash('message', 'Servicio Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            Servicio::where('id', $id)->delete();
        }
    }
}