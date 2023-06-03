<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Search extends Component
{
    public $msg = array('name'=> 'my array');
    public function render()
    {
        return view('livewire.search');
    }
}
