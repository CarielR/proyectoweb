<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Empleo;

class Empleos extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $cliente_id, $nombre_emp, $descripcion_emp, $modalidad_emp, $horario_emp, $fechapub_emp, $experiencia_emp;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.empleos.view', [
            'empleos' => Empleo::latest()
						->orWhere('cliente_id', 'LIKE', $keyWord)
						->orWhere('nombre_emp', 'LIKE', $keyWord)
						->orWhere('descripcion_emp', 'LIKE', $keyWord)
						->orWhere('modalidad_emp', 'LIKE', $keyWord)
						->orWhere('horario_emp', 'LIKE', $keyWord)
						->orWhere('fechapub_emp', 'LIKE', $keyWord)
						->orWhere('experiencia_emp', 'LIKE', $keyWord)
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
		$this->nombre_emp = null;
		$this->descripcion_emp = null;
		$this->modalidad_emp = null;
		$this->horario_emp = null;
		$this->fechapub_emp = null;
		$this->experiencia_emp = null;
    }

    public function store()
    {
        $this->validate([
		'cliente_id' => 'required',
		'nombre_emp' => 'required',
		'descripcion_emp' => 'required',
		'modalidad_emp' => 'required',
		'horario_emp' => 'required',
		'fechapub_emp' => 'required',
		'experiencia_emp' => 'required',
        ]);

        Empleo::create([ 
			'cliente_id' => $this-> cliente_id,
			'nombre_emp' => $this-> nombre_emp,
			'descripcion_emp' => $this-> descripcion_emp,
			'modalidad_emp' => $this-> modalidad_emp,
			'horario_emp' => $this-> horario_emp,
			'fechapub_emp' => $this-> fechapub_emp,
			'experiencia_emp' => $this-> experiencia_emp
        ]);
        
        $this->resetInput();
		$this->dispatchBrowserEvent('closeModal');
		session()->flash('message', 'Empleo Successfully created.');
    }

    public function edit($id)
    {
        $record = Empleo::findOrFail($id);
        $this->selected_id = $id; 
		$this->cliente_id = $record-> cliente_id;
		$this->nombre_emp = $record-> nombre_emp;
		$this->descripcion_emp = $record-> descripcion_emp;
		$this->modalidad_emp = $record-> modalidad_emp;
		$this->horario_emp = $record-> horario_emp;
		$this->fechapub_emp = $record-> fechapub_emp;
		$this->experiencia_emp = $record-> experiencia_emp;
    }

    public function update()
    {
        $this->validate([
		'cliente_id' => 'required',
		'nombre_emp' => 'required',
		'descripcion_emp' => 'required',
		'modalidad_emp' => 'required',
		'horario_emp' => 'required',
		'fechapub_emp' => 'required',
		'experiencia_emp' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Empleo::find($this->selected_id);
            $record->update([ 
			'cliente_id' => $this-> cliente_id,
			'nombre_emp' => $this-> nombre_emp,
			'descripcion_emp' => $this-> descripcion_emp,
			'modalidad_emp' => $this-> modalidad_emp,
			'horario_emp' => $this-> horario_emp,
			'fechapub_emp' => $this-> fechapub_emp,
			'experiencia_emp' => $this-> experiencia_emp
            ]);

            $this->resetInput();
            $this->dispatchBrowserEvent('closeModal');
			session()->flash('message', 'Empleo Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            Empleo::where('id', $id)->delete();
        }
    }
}