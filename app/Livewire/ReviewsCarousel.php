<?php

namespace App\Livewire;

use App\Models\Review;
use Livewire\Component;

class ReviewsCarousel extends Component
{
     public $limit = 10;

    protected $listeners = [
        'reviewCreated' => '$refresh', 
    ];
    public function render()
    {
         $reviews = Review::latest()->take($this->limit)->get();

        return view('livewire.reviews-carousel', compact('reviews'));
    }
}
