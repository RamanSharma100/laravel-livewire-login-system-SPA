<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\todos;

class AddTodo extends Component
{
    public $todo;

    public function render()
    {
        return view('livewire.add-todo');
    }

    public function handleTodo()
    {
        $this->validate(['todo'=> 'required']);

        todos::create([ 'user_id' => auth()->user()->id ,'todo'=> $this->todo]);

        session()->flash('success', "Todo added successfully!");
        return redirect(route("home"));

    }
}