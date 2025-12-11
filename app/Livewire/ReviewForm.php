<?php

namespace App\Livewire;

use App\Models\Review;
use Livewire\Component;

class ReviewForm extends Component
{
    public $name;
    public $product;
    public $description;

    protected $rules = [
        'name'        => 'required|string|max:255',
        'product'     => 'required|string|max:255',
        'description' => 'required|string',
    ];

    public function submit()
    {
        $this->validate();

        Review::create([
            'name'        => $this->name,
            'product'     => $this->product,
            'description' => $this->description,
        ]);

        // reset campi
        $this->reset(['name', 'product', 'description']);

        // opzionale: evento o flash message
        session()->flash('message', 'Recensione inviata!');
        
        
        $this->dispatch('reviewCreated');
    }
    public function render()
    {
        return view('livewire.review-form');
    }
}
