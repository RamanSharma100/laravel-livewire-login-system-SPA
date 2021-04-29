<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{
    public $form = [
        'email'=>'',
        'password'=>'',
    ];
    public $error = '';

    public function render()
    {
        return view('livewire.login');
    }
    
    public function handleLogin()
    {
        $this->validate([
            "form.email"=> 'required|email',
            "form.password"=> "required"
        ]);

        Auth::attempt($this->form);
        if (Auth::attempt($this->form))
        {
            
            session()->flash('success', "You are Loggedin successfully!");
            return redirect(route("home"));
        }
        else
        {
            $this->error = "Email or Password wrong!!";
        }


    }
}