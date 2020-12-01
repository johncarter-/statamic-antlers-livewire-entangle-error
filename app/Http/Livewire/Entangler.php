<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Entangler extends Component
{
    public $showDropdown = true;

    public function render()
    {
        return view('livewire.entangler');
    }
}
