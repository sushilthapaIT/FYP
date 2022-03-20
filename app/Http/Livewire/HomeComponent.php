<?php

namespace App\Http\Livewire;

use App\Models\Product;
use App\Models\Category;
use Livewire\Component;
use App\Models\HomeCategory;

class HomeComponent extends Component
{
    public function render()
    {
        $lproducts = Product::orderBy('created_at','DESC')->get()->take(8);
        $category = HomeCategory::find(1);
        $cats = explode(',',$category->sel_catagories);
        $categories = Category::whereIn('id',$cats)->get();
        $no_of_products = $category->no_of_products;

        return view('livewire.home-component',['lproducts'=>$lproducts,'categories'=>$categories,'no_of_products'=>$no_of_products])->layout('layouts.base');
    }
}
