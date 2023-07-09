<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Genero;

class Generos extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $Nombre_gen;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.generos.view', [
            'generos' => Genero::latest()
						->orWhere('Nombre_gen', 'LIKE', $keyWord)
						->paginate(10),
        ]);
    }
	
    public function cancel()
    {
        $this->resetInput();
    }
	
    private function resetInput()
    {		
		$this->Nombre_gen = null;
    }

    public function store()
    {
        $this->validate([
		'Nombre_gen' => 'required',
        ]);

        Genero::create([ 
			'Nombre_gen' => $this-> Nombre_gen
        ]);
        
        $this->resetInput();
		$this->dispatchBrowserEvent('closeModal');
		session()->flash('message', 'Genero Successfully created.');
    }

    public function edit($id)
    {
        $record = Genero::findOrFail($id);
        $this->selected_id = $id; 
		$this->Nombre_gen = $record-> Nombre_gen;
    }

    public function update()
    {
        $this->validate([
		'Nombre_gen' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Genero::find($this->selected_id);
            $record->update([ 
			'Nombre_gen' => $this-> Nombre_gen
            ]);

            $this->resetInput();
            $this->dispatchBrowserEvent('closeModal');
			session()->flash('message', 'Genero Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            Genero::where('id', $id)->delete();
        }
    }
}