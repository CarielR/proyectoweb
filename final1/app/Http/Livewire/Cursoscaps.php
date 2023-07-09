<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Cursoscap;

class Cursoscaps extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $cliente_id, $nombre_cursoscaps, $descipcion_cursoscaps, $publicacion_cursoscaps, $edadmin_cursoscaps, $edadmax_cursoscaps, $link_cursoscaps, $cupos_cursoscaps, $costo_cursoscaps;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.cursoscaps.view', [
            'cursoscaps' => Cursoscap::latest()
						->orWhere('cliente_id', 'LIKE', $keyWord)
						->orWhere('nombre_cursoscaps', 'LIKE', $keyWord)
						->orWhere('descipcion_cursoscaps', 'LIKE', $keyWord)
						->orWhere('publicacion_cursoscaps', 'LIKE', $keyWord)
						->orWhere('edadmin_cursoscaps', 'LIKE', $keyWord)
						->orWhere('edadmax_cursoscaps', 'LIKE', $keyWord)
						->orWhere('link_cursoscaps', 'LIKE', $keyWord)
						->orWhere('cupos_cursoscaps', 'LIKE', $keyWord)
						->orWhere('costo_cursoscaps', 'LIKE', $keyWord)
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
		$this->nombre_cursoscaps = null;
		$this->descipcion_cursoscaps = null;
		$this->publicacion_cursoscaps = null;
		$this->edadmin_cursoscaps = null;
		$this->edadmax_cursoscaps = null;
		$this->link_cursoscaps = null;
		$this->cupos_cursoscaps = null;
		$this->costo_cursoscaps = null;
    }

    public function store()
    {
        $this->validate([
		'cliente_id' => 'required',
		'nombre_cursoscaps' => 'required',
		'descipcion_cursoscaps' => 'required',
		'publicacion_cursoscaps' => 'required',
		'edadmin_cursoscaps' => 'required',
		'edadmax_cursoscaps' => 'required',
		'link_cursoscaps' => 'required',
		'cupos_cursoscaps' => 'required',
		'costo_cursoscaps' => 'required',
        ]);

        Cursoscap::create([ 
			'cliente_id' => $this-> cliente_id,
			'nombre_cursoscaps' => $this-> nombre_cursoscaps,
			'descipcion_cursoscaps' => $this-> descipcion_cursoscaps,
			'publicacion_cursoscaps' => $this-> publicacion_cursoscaps,
			'edadmin_cursoscaps' => $this-> edadmin_cursoscaps,
			'edadmax_cursoscaps' => $this-> edadmax_cursoscaps,
			'link_cursoscaps' => $this-> link_cursoscaps,
			'cupos_cursoscaps' => $this-> cupos_cursoscaps,
			'costo_cursoscaps' => $this-> costo_cursoscaps
        ]);
        
        $this->resetInput();
		$this->dispatchBrowserEvent('closeModal');
		session()->flash('message', 'Cursoscap Successfully created.');
    }

    public function edit($id)
    {
        $record = Cursoscap::findOrFail($id);
        $this->selected_id = $id; 
		$this->cliente_id = $record-> cliente_id;
		$this->nombre_cursoscaps = $record-> nombre_cursoscaps;
		$this->descipcion_cursoscaps = $record-> descipcion_cursoscaps;
		$this->publicacion_cursoscaps = $record-> publicacion_cursoscaps;
		$this->edadmin_cursoscaps = $record-> edadmin_cursoscaps;
		$this->edadmax_cursoscaps = $record-> edadmax_cursoscaps;
		$this->link_cursoscaps = $record-> link_cursoscaps;
		$this->cupos_cursoscaps = $record-> cupos_cursoscaps;
		$this->costo_cursoscaps = $record-> costo_cursoscaps;
    }

    public function update()
    {
        $this->validate([
		'cliente_id' => 'required',
		'nombre_cursoscaps' => 'required',
		'descipcion_cursoscaps' => 'required',
		'publicacion_cursoscaps' => 'required',
		'edadmin_cursoscaps' => 'required',
		'edadmax_cursoscaps' => 'required',
		'link_cursoscaps' => 'required',
		'cupos_cursoscaps' => 'required',
		'costo_cursoscaps' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Cursoscap::find($this->selected_id);
            $record->update([ 
			'cliente_id' => $this-> cliente_id,
			'nombre_cursoscaps' => $this-> nombre_cursoscaps,
			'descipcion_cursoscaps' => $this-> descipcion_cursoscaps,
			'publicacion_cursoscaps' => $this-> publicacion_cursoscaps,
			'edadmin_cursoscaps' => $this-> edadmin_cursoscaps,
			'edadmax_cursoscaps' => $this-> edadmax_cursoscaps,
			'link_cursoscaps' => $this-> link_cursoscaps,
			'cupos_cursoscaps' => $this-> cupos_cursoscaps,
			'costo_cursoscaps' => $this-> costo_cursoscaps
            ]);

            $this->resetInput();
            $this->dispatchBrowserEvent('closeModal');
			session()->flash('message', 'Cursoscap Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            Cursoscap::where('id', $id)->delete();
        }
    }
}