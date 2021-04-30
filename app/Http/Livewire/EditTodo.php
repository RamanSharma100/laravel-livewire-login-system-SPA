<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\todos;

class EditTodo extends Component
{
    public $todo;
    public todos $currentTodo;
    
    public function mount($id)
    {
        $this->currentTodo = todos::find($id);
        $this->todo = $this->currentTodo->todo;
    }

    public function render()
    {
        return view('livewire.edit-todo');
    }
    
    public function handleUpdate()
    {
        $this->validate(['todo'=> 'required']);
        $this->currentTodo->update(['todo'=> $this->todo]);

        session()->flash('success', "Todo updated successfully!");
        return redirect(route("home"));

    }
}