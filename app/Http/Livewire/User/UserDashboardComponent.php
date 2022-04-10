<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class UserDashboardComponent extends Component
{
    public function render()
    {
        $orders = Order::orderBy('created_at','DESC')->where('user_id',Auth::user()->id)->get()->take(10);
        $totalCost = Order::where('status','!=','canceled')->where('user_id',Auth::user()->id)->sum('total');
        $totalPurchase = Order::where('status','!=','canceled')->where('user_id',Auth::user()->id)->sum('total');
        $totalDeliverd = Order::where('status','deliverd')->where('user_id',Auth::user()->id)->sum('total');
        $totalCanceled = Order::where('status','!=','canceled')->where('user_id',Auth::user()->id)->sum('total');
        return view('livewire.user.user-dashboard-component',['orders'=>$orders,'totalCost'=>$totalCost,'totalPurchase'=>$totalPurchase,'totalDeliverd'=>$totalDeliverd,'totalCanceled'=>$totalCanceled])->layout('layouts.base');
    }
}
