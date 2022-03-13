<?php

namespace App\Http\Livewire;

use App\Models\Product;
use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;
use Cart;


class SearchComponent extends Component
{
    public $search;
    public $product_cat;
    public $product_cat_id;

    public function mount()
    {
        $this->fill(request()->only('search','product_cat','product_cat_id'));
    }

    public function store($product_id,$product_name,$product_price)
    {
        Cart::add($product_id,$product_name,1,$product_price)->associate('App\Models\Product');
        session()->flash('success_message','Item added in Cart');
        return redirect()->route('product.cart');
    }

    use WithPagination;
    public function render()
    {
        $categories = Category::all();
        $products = Product::all();
        return view('livewire.search-component',['products'=> $products,'categories'=>$categories])->layout("layouts.base");

    }
}
