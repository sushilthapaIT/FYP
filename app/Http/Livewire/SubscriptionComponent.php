<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\subscribe;

class SubscriptionComponent extends Component
{
    public $email;

    public function subscribe()
    {
           
            $this->validate([
            'email' => 'required', 
        ]);

        $sub = new subscribe();
        $sub->email = $this->email;
        $sub->save();
        session()->flash('message','Thank you for your subscription!');
    }
    public function render()
    {
        return view('livewire.subscription-component')->layout("layouts.base");
    }
}
