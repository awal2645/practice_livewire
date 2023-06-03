<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;
use Livewire\Component;

class Form extends Component
{
    public $name;
    public $email;

    protected $rules = [
        'name' => 'required|min:3',
        'email' => 'required|email',
    ];

    public function render()
    {
        return view('livewire.form');
    }
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName, [
            'email' => 'required|email',
            'name' => 'required',
        ]);
    }

    public function submitForm(Request $request)
    {
        $this->validate();

        // Perform form submission logic
        dd($request->all());
        session()->flash('message', 'Form submitted successfully.');
    }
}
