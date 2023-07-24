<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;
use App\Models\Admin\Appeal;

class Appeals extends Component
{
    public string $name;
    public string $telephone;

    protected $rules = [
        'name' => 'required',
        'telephone' => 'required',
    ];

    public function render()
    {
        return view('livewire.pages.appeal');
    }

    public function store()
    {
        $this->validate();

        Appeal::create(['name'=>$this->name, 'telephone'=>$this->telephone]);

        $this->dispatchBrowserEvent('stored');

        $this->name = '';
        $this->telephone = '';

        return redirect()->back();
    }
}
