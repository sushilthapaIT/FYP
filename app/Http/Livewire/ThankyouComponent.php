<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Order;

class ThankyouComponent extends Component
{
    public function render()
    {
        $orders = Order::all();
        return view('livewire.thankyou-component',['order'=>$orders])->layout('layouts.base');
    }
}
