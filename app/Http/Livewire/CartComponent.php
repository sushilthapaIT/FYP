<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Cart;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;


class CartComponent extends Component
{
    public function increaseQuantity($rowId)    //function for increase quantity in cart
    {
        $product = Cart::get($rowId);
        $qty = $product->qty + 1;
        Cart::update($rowId,$qty);
    }

    public function decreaseQuantity($rowId)    //function for decrease quantity in cart
    {
        $product = Cart::get($rowId);
        $qty = $product->qty - 1;
        Cart::update($rowId,$qty);
    }
    
    public function destroy($rowId)
    {
        Cart::remove($rowId);
        session()->flash('success_message','Item has been removed');
    }

    public function destroyAll()
    {
        Cart::destroy();
    }

    public function switchToSaveForLater($rowId)
    {
        $item = Cart::instance('cart')->get($rowId);
        Cart::instance('cart')->remove($rowId);
        Cart::instance('saveForLater')->add($item->id,$item->name,1,$item->price)->associate('App\Models\Product');
        $this->emitTo('cart-count-component','refreshComponent');
        session()->flash('success_message','Item has been saved for later');
    }

    public function moveToCart($rowId)
    {
        $item = Cart::instance('saveForLater')->get($rowId);
        Cart::instance('saveForLater')->remove($rowId);
        Cart::instance('cart')->add($item->id,$item->name,1,$item->price)->associate('App\Models\Product');
        $this->emitTo('cart-count-component','refreshComponent');
        session()->flash('s_success_message','Item has been moved to cart');
    }

    public function deleteFromSaveForLater($rowId)
    {
        Cart::instance('saveForLater')->remove($rowId);
        session()->flash('s_success_message','Item has been removed from save for later');
    }

    public function checkout()
    {
        if(Auth::check())
        {
            return redirect()->route('checkout');
        }
        else
        {
            return redirect()->route('login');
        }
    }

    //coupon for subscription future work tax and all
    public function setAmountForCheckout()
    {
        if(!Cart::instance('cart')->count() > 0)
        {
            session()->forget('chechout');
            return;
        }
        if(session()->has('coupon'))  
        {
            session()->put('checkout',[
                'discount' => $this->discount,
                'subtotal' => $this->subtotalAfterDiscount,
                'tax' => $this->taxAfterDiscount,
                'total' => $this->totalAfterDiscount
            ]);
        }
        else 
        {
            session()->put('checkout',[
            'discount' => 0,
            'subtotal' => Cart::instance('cart')->subtotal(),
            'tax' => Cart::instance('cart')->tax(),
            'total' => Cart::instance('cart')->total(),
        ]);
    }
    }

    public function render()
    {
        $this->setAmountForCheckout();
        return view('livewire.cart-component')->layout("layouts.base");
    }
}
