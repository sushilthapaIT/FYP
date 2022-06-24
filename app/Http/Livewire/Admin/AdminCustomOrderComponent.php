<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Custom;
use Illuminate\Support\Facades\DB;

class AdminCustomOrderComponent extends Component
{
    public function render()
    {
        $customs = Custom::orderBy('created_at','DESC')->paginate(12);
        return view('livewire.admin.admin-custom-order-component',['customs'=>$customs])->layout('layouts.admin');
    }
}
