<?php

namespace App\Http\Livewire;

use App\Models\Product;
use App\Models\Category;
use Livewire\Component;
use App\Models\HomeCategory;
use Cart;
use Illuminate\Support\Facades\Auth;

class HomeComponent extends Component
{
    public function render()
    {
        $lproducts = Product::orderBy('created_at','DESC')->get()->take(8);
        $category = HomeCategory::find(1);
        $cats = explode(',',$category->sel_catagories);
        $categories = Category::whereIn('id',$cats)->get();
        $no_of_products = $category->no_of_products;

        // user session restore to save data of cart and wishlist
            if(Auth::check())
            {
                Cart::instance('cart')->restore(Auth::user()->email);
                Cart::instance('wishlist')->restore(Auth::user()->email);
            }
        return view('livewire.home-component',['lproducts'=>$lproducts,'categories'=>$categories,'no_of_products'=>$no_of_products])->layout('layouts.base');
    }
}
