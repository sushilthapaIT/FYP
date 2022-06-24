<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Subscribe;
use Illuminate\Support\Facades\DB;

class AdminSubscriptionComponent extends Component
{
    
    public function render()
    {
        $subscribe = Subscribe::orderBy('created_at','DESC')->paginate(12);
        return view('livewire.admin.admin-subscription-component',['subscribe'=>$subscribe])->layout('layouts.admin');
    }
}
