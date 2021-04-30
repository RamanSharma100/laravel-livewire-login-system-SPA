<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\todos;

class Home extends Component
{
    public function render()
    {
        
        $todosList = todos::where('user_id',auth()->user()->id);
        return view('livewire.home', ['todos'=> $todosList]);
    }

    public function deleteTodo($id)
    {
        todos::find($id)->delete();
        return session()->flash('success', "Todo deleted successfully!");
    }
}