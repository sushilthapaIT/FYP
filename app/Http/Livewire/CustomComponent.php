<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CustomComponent extends Component
{
    public function render()
    {
        return view('livewire.custom-component')->layout('layouts.base');
    }
}
