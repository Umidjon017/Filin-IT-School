<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;
use App\Models\Admin\Question;
use Livewire\WithPagination;


class Questions extends Component
{
    use WithPagination;
    
    public $key;

    public $sort='latest';

    public $name;
    public $email;
    public $question;
 
    protected $rules = [
        'name' => 'required',
        'email' => 'required|email',
        'question' => 'required',
    ];

    protected $queryString = ['sort'];

    public function updatingKey()
    {
        $this->resetPage();
    }

    public function render()
    {
        $results=[];
        
        $questions=Question::query();
        
        if($this->key){
            $questions->where('question', 'like', '%'.$this->key.'%')->latest()->get();
        }

        if($this->sort=='oldest'){
            $questions->oldest();
        }else{
            $questions->latest();
        }
        $questions=$questions->where('status', 1)->paginate(10);
        
        return view('livewire.pages.questions', compact('questions','results'));
    }

    public function store()
    {
        $this->validate();

        Question::create(['name'=>$this->name, 'email'=>$this->email, 'question'=>$this->question]);

        $this->dispatchBrowserEvent('stored');

        $this->name='';
        $this->email='';
        $this->question='';

        return redirect()->back()->with('success', 'Запись добавлена');
    }
}
