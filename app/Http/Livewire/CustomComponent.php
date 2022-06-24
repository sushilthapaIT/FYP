<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Custom;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;

class CustomComponent extends Component
{

    public $flavour;
    public $shape;
    public $eggless;
    public $message;
    public $note;
    public $images;


    public $s_firstname;
    public $s_lastname;
    public $s_email;
    public $s_mobile;
    public $s_line1;
    public $s_line2;
    public $s_city;
    public $s_province;
    public $s_country;
    public $s_zipcode;
    // public function updated($fields)
    // {
    //     $this->validateOnly($fields,[
    //         'name' => 'required', 
    //         'email' => 'required|email', 
    //         'phone' => 'required', 
    //         'comment' => 'required'
    //     ]);
    // }
    public function verifyForCheckout()
    {
        
    }
    public function customOrder()
    {
        // if(!Auth::check())
        // {
        //     return redirect()->route('login');
        // }
        // else
        // {
            $this->validate([
            'flavour' => 'required', 
            'shape' => 'required', 
            'eggless' => 'required', 
            'note' => 'required',
            's_firstname' => 'required',
            's_lastname' => 'required',
            's_email' => 'required|email',
            's_mobile' => 'required|numeric',
            's_line1' => 'required',
            's_city' => 'required',
            's_province' => 'required',
            's_country' => 'required',
            's_zipcode' => 'required',
        ]);

     

        $cake = 600;

        if($this->shape='round')
        {
            $price = 50;
        }
        elseif($this->shape='square')
        {
            $price = 100;
        }
        elseif($this->shape='rectangle')
        {
            $price = 70;
        }

        if($this->eggless = 'yes')
        {
            $egg = 70;
        }
        elseif($this->eggless = 'no')
        {
            $egg = 0;
        }
        // {{ dd($this->shape); }}

        $finalPrice = $cake+$price+$egg;

        $customOrder = new Custom();
        $customOrder->flavour = $this->flavour;
        $customOrder->shape = $this->shape;
        $customOrder->eggless = $this->eggless;
        $customOrder->message = $finalPrice;
        $customOrder->note = $this->note;
        $customOrder->firstname = $this->s_firstname;
        $customOrder->lastname = $this->s_lastname;
        $customOrder->email = $this->s_email;
        $customOrder->mobile = $this->s_mobile;
        $customOrder->line1 = $this->s_line1;;
        $customOrder->line2 = $this->s_line2;
        $customOrder->city = $this->s_city;
        $customOrder->province = $this->s_province;
        $customOrder->country = $this->s_country;
        $customOrder->zipcode = $this->s_zipcode;
        
        // $imageName = Carbon::now()->timestamp. '.' . $this->images->extension();
        // $this->images->storeAs('custom',$imageName);
        // $customOrder->images = $imageName;
        $customOrder->save();
        session()->flash('message','Your total price is ' .$finalPrice . 'and your order is confirmed.');
        }
        

    // }
    public function render()
    {
        return view('livewire.custom-component')->layout('layouts.base');
    }
}
