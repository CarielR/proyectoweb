<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\User;

class Users extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $name, $email, $phone, $title, $photo, $two_factor_secret, $two_factor_recovery_codes, $two_factor_confirmed_at, $current_team_id, $profile_photo_path;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.users.view', [
            'users' => User::latest()
						->orWhere('name', 'LIKE', $keyWord)
						->orWhere('email', 'LIKE', $keyWord)
						->orWhere('phone', 'LIKE', $keyWord)
						->orWhere('title', 'LIKE', $keyWord)
						->orWhere('photo', 'LIKE', $keyWord)
						->orWhere('two_factor_secret', 'LIKE', $keyWord)
						->orWhere('two_factor_recovery_codes', 'LIKE', $keyWord)
						->orWhere('two_factor_confirmed_at', 'LIKE', $keyWord)
						->orWhere('current_team_id', 'LIKE', $keyWord)
						->orWhere('profile_photo_path', 'LIKE', $keyWord)
						->paginate(10),
        ]);
    }
	
    public function cancel()
    {
        $this->resetInput();
    }
	
    private function resetInput()
    {		
		$this->name = null;
		$this->email = null;
		$this->phone = null;
		$this->title = null;
		$this->photo = null;
		$this->two_factor_secret = null;
		$this->two_factor_recovery_codes = null;
		$this->two_factor_confirmed_at = null;
		$this->current_team_id = null;
		$this->profile_photo_path = null;
    }

    public function store()
    {
        $this->validate([
		'name' => 'required',
		'email' => 'required',
        ]);

        User::create([ 
			'name' => $this-> name,
			'email' => $this-> email,
			'phone' => $this-> phone,
			'title' => $this-> title,
			'photo' => $this-> photo,
			'two_factor_secret' => $this-> two_factor_secret,
			'two_factor_recovery_codes' => $this-> two_factor_recovery_codes,
			'two_factor_confirmed_at' => $this-> two_factor_confirmed_at,
			'current_team_id' => $this-> current_team_id,
			'profile_photo_path' => $this-> profile_photo_path
        ]);
        
        $this->resetInput();
		$this->dispatchBrowserEvent('closeModal');
		session()->flash('message', 'User Successfully created.');
    }

    public function edit($id)
    {
        $record = User::findOrFail($id);
        $this->selected_id = $id; 
		$this->name = $record-> name;
		$this->email = $record-> email;
		$this->phone = $record-> phone;
		$this->title = $record-> title;
		$this->photo = $record-> photo;
		$this->two_factor_secret = $record-> two_factor_secret;
		$this->two_factor_recovery_codes = $record-> two_factor_recovery_codes;
		$this->two_factor_confirmed_at = $record-> two_factor_confirmed_at;
		$this->current_team_id = $record-> current_team_id;
		$this->profile_photo_path = $record-> profile_photo_path;
    }

    public function update()
    {
        $this->validate([
		'name' => 'required',
		'email' => 'required',
        ]);

        if ($this->selected_id) {
			$record = User::find($this->selected_id);
            $record->update([ 
			'name' => $this-> name,
			'email' => $this-> email,
			'phone' => $this-> phone,
			'title' => $this-> title,
			'photo' => $this-> photo,
			'two_factor_secret' => $this-> two_factor_secret,
			'two_factor_recovery_codes' => $this-> two_factor_recovery_codes,
			'two_factor_confirmed_at' => $this-> two_factor_confirmed_at,
			'current_team_id' => $this-> current_team_id,
			'profile_photo_path' => $this-> profile_photo_path
            ]);

            $this->resetInput();
            $this->dispatchBrowserEvent('closeModal');
			session()->flash('message', 'User Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            User::where('id', $id)->delete();
        }
    }
}