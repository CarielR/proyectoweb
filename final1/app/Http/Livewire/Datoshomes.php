<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Datoshome;

class Datoshomes extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $vision, $mision, $contactos;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.datoshomes.view', [
            'datoshomes' => Datoshome::latest()
						->orWhere('vision', 'LIKE', $keyWord)
						->orWhere('mision', 'LIKE', $keyWord)
						->orWhere('contactos', 'LIKE', $keyWord)
						->paginate(10),
        ]);
    }

    public function cancel()
    {
        $this->resetInput();
    }

    private function resetInput()
    {
		$this->vision = null;
		$this->mision = null;
		$this->contactos = null;
    }

    public function store()
    {
        $this->validate([
		'vision' => 'required',
		'mision' => 'required',
		'contactos' => 'required',
        ]);

        Datoshome::create([
			'vision' => $this-> vision,
			'mision' => $this-> mision,
			'contactos' => $this-> contactos
        ]);

        $this->resetInput();
		$this->dispatchBrowserEvent('closeModal');
		session()->flash('message', 'Datoshome Successfully created.');
    }

    public function edit($id)
    {
        $record = Datoshome::findOrFail($id);
        $this->selected_id = $id;
		$this->vision = $record-> vision;
		$this->mision = $record-> mision;
		$this->contactos = $record-> contactos;
    }

    public function update()
    {
        $this->validate([
		'vision' => 'required',
		'mision' => 'required',
		'contactos' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Datoshome::find($this->selected_id);
            $record->update([
			'vision' => $this-> vision,
			'mision' => $this-> mision,
			'contactos' => $this-> contactos
            ]);

            $this->resetInput();
            $this->dispatchBrowserEvent('closeModal');
			session()->flash('message', 'Datoshome Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            Datoshome::where('id', $id)->delete();
        }
    }
}
