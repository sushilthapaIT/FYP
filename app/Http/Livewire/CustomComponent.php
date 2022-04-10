<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Custom;

class CustomComponent extends Component
{

    public $flavour;
    public $shape;
    public $eggless;
    public $message;
    public $note;
    // public $images;


    // public function updated($fields)
    // {
    //     $this->validateOnly($fields,[
    //         'name' => 'required', 
    //         'email' => 'required|email', 
    //         'phone' => 'required', 
    //         'comment' => 'required'
    //     ]);
    // }

    public function customOrder()
    {
        $this->validate([
            'flavour' => 'required', 
            'shape' => 'required', 
            'eggless' => 'required', 
            'message' => '',
            'note' => '',
            // 'images' => '',
            
        ]);

        $customOrder = new Custom();
        $customOrder->flavour = $this->flavour;
        $customOrder->shape = $this->shape;
        $customOrder->eggless = $this->eggless;
        $customOrder->message = $this->message;
        $customOrder->note = $this->note;
        // $customOrder->images = $this->images;
        $customOrder->save();
        session()->flash('message','Thanks, Your message has been sent successfully!');

    }
    public function render()
    {
        return view('livewire.custom-component')->layout('layouts.base');
    }
}
