<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Contact extends Component
{
    public function render()
    {
        $data = ['name' => 'md abdul awal', 'no' => '01763821693'];
        return view('livewire.contact', ['data' => $data]);
    }
}
