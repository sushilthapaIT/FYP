<?php

namespace App\Http\Livewire\User;

use App\Models\OrderItem;
use Livewire\Component;
use App\Models\Review;
class UserReviewComponent extends Component
{
    public $order_item_id;
    public $rating;
    public $comment;

    public function mount($order_item_id)
    {
        $this->order_item_id = $order_item_id;
    }

    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'rating' => 'required',
            'comment' => 'required'
        ]);
    }

    public function addReview()
    {
        $this->validate([
            'rating' => 'required',
            'comment' => 'required'
        ]);
        
        $review = new Review();
       
        $review->rating = $this->rating;
        //  {{ dd($this->rating); }}
        $review->comment = $this->comment;
        $review->order_item_id = $this->order_item_id;
        $review->save();
        // {{ dd('sdas'); }}
        $orderItem = OrderItem::find($this->order_item_id);
        $orderItem->rstatus = true;
        $orderItem->save();
        session()->flash('message','Your reveiw has been added successfully!');
    }

    public function render()
    {
        $orderItem = OrderItem::find($this->order_item_id);
        return view('livewire.user.user-review-component',['orderItem'=>$orderItem])->layout('layouts.base');
    }
}
