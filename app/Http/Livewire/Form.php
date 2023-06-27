<?php

namespace App\Http\Livewire;

use App\Models\Student;
use Illuminate\Http\Request;
use Livewire\Component;

class Form extends Component
{
    public $name;
    public $email;
    public $roll;
    public $lists;


    protected $rules = [
        'name' => 'required',
        'roll' => 'required',
        'email' => 'required|email',
    ];

    public function render()
    {
        $this->lists = Student::all();
        return view('livewire.form');
    }

    // real time validation

    public function updated($field)
    {
        $this->validateOnly($field, [
            'email' => 'required|email|unique:students',
            'roll' => 'required|unique:students',
            'name' => 'required',
        ]);
    }

    public function submitForm(Request $request)
    {
        $this->validate();
        Student::create([
            'name' => $this->name,
            'roll' => $this->roll,
            'email' => $this->email,
        ]);
        $this->clearFields();
        
    }

    private function clearFields()
    {
        $this->name = '';
        $this->roll = '';
        $this->email = '';
    }
    public function delete($id)
    {
        Student::find($id)->delete();
        session()->flash('message', 'Post deleted successfully.');
    }
}
