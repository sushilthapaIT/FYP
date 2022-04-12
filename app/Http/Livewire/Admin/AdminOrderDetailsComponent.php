<?php

namespace App\Http\Livewire\Admin;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Livewire\Component;

class AdminOrderDetailsComponent extends Component
{
    
    public $order_id;

    public function mount($order_id)
    {
        // {{ dd($order_id); }}
        $this->$order_id = $order_id;
    }

    public function render()
    {
        // {{ dd('sad'); }}
        $order = Order::find($this->order_id);
        
        return view('livewire.admin.admin-order-details-component',['order'=>$order])->layout('layouts.admin');
    }
}
