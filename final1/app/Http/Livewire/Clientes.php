<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Cliente;

class Clientes extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $genero_id, $nombre_cli, $fecha_nac_cli, $telefono1_cli, $telefono2_cli, $email_cli, $titulo_cli, $rol_cli, $experiencia_cli;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.clientes.view', [
            'clientes' => Cliente::latest()
						->orWhere('genero_id', 'LIKE', $keyWord)
						->orWhere('nombre_cli', 'LIKE', $keyWord)
						->orWhere('fecha_nac_cli', 'LIKE', $keyWord)
						->orWhere('telefono1_cli', 'LIKE', $keyWord)
						->orWhere('telefono2_cli', 'LIKE', $keyWord)
						->orWhere('email_cli', 'LIKE', $keyWord)
						->orWhere('titulo_cli', 'LIKE', $keyWord)
						->orWhere('rol_cli', 'LIKE', $keyWord)
						->orWhere('experiencia_cli', 'LIKE', $keyWord)
						->paginate(10),
        ]);
    }
	
    public function cancel()
    {
        $this->resetInput();
    }
	
    private function resetInput()
    {		
		$this->genero_id = null;
		$this->nombre_cli = null;
		$this->fecha_nac_cli = null;
		$this->telefono1_cli = null;
		$this->telefono2_cli = null;
		$this->email_cli = null;
		$this->titulo_cli = null;
		$this->rol_cli = null;
		$this->experiencia_cli = null;
    }

    public function store()
    {
        $this->validate([
		'genero_id' => 'required',
		'nombre_cli' => 'required',
		'fecha_nac_cli' => 'required',
		'telefono1_cli' => 'required',
		'telefono2_cli' => 'required',
		'email_cli' => 'required',
		'titulo_cli' => 'required',
		'rol_cli' => 'required',
		'experiencia_cli' => 'required',
        ]);

        Cliente::create([ 
			'genero_id' => $this-> genero_id,
			'nombre_cli' => $this-> nombre_cli,
			'fecha_nac_cli' => $this-> fecha_nac_cli,
			'telefono1_cli' => $this-> telefono1_cli,
			'telefono2_cli' => $this-> telefono2_cli,
			'email_cli' => $this-> email_cli,
			'titulo_cli' => $this-> titulo_cli,
			'rol_cli' => $this-> rol_cli,
			'experiencia_cli' => $this-> experiencia_cli
        ]);
        
        $this->resetInput();
		$this->dispatchBrowserEvent('closeModal');
		session()->flash('message', 'Cliente Successfully created.');
    }

    public function edit($id)
    {
        $record = Cliente::findOrFail($id);
        $this->selected_id = $id; 
		$this->genero_id = $record-> genero_id;
		$this->nombre_cli = $record-> nombre_cli;
		$this->fecha_nac_cli = $record-> fecha_nac_cli;
		$this->telefono1_cli = $record-> telefono1_cli;
		$this->telefono2_cli = $record-> telefono2_cli;
		$this->email_cli = $record-> email_cli;
		$this->titulo_cli = $record-> titulo_cli;
		$this->rol_cli = $record-> rol_cli;
		$this->experiencia_cli = $record-> experiencia_cli;
    }

    public function update()
    {
        $this->validate([
		'genero_id' => 'required',
		'nombre_cli' => 'required',
		'fecha_nac_cli' => 'required',
		'telefono1_cli' => 'required',
		'telefono2_cli' => 'required',
		'email_cli' => 'required',
		'titulo_cli' => 'required',
		'rol_cli' => 'required',
		'experiencia_cli' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Cliente::find($this->selected_id);
            $record->update([ 
			'genero_id' => $this-> genero_id,
			'nombre_cli' => $this-> nombre_cli,
			'fecha_nac_cli' => $this-> fecha_nac_cli,
			'telefono1_cli' => $this-> telefono1_cli,
			'telefono2_cli' => $this-> telefono2_cli,
			'email_cli' => $this-> email_cli,
			'titulo_cli' => $this-> titulo_cli,
			'rol_cli' => $this-> rol_cli,
			'experiencia_cli' => $this-> experiencia_cli
            ]);

            $this->resetInput();
            $this->dispatchBrowserEvent('closeModal');
			session()->flash('message', 'Cliente Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            Cliente::where('id', $id)->delete();
        }
    }
}