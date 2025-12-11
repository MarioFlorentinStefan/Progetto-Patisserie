<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;

class CreateProductForm extends Component
{
    use WithFileUploads;
    #[Validate('required|min:3')]
    public $name;
    #[Validate('required')]
    public $price;
    #[Validate('required')]
    public $origin;
    #[Validate('required')]
    public $description;
    #[Validate('image|max:1024')]
    public $image;

    public function messages(){
        return[
            'required'=> 'Il :attribute è richiesto.',
            'min'=> 'Il :attribute deve possedere minimo 3 caratteri.',
            'image'=> 'Il file deve essere di tipo image.',
            'max'=> 'Il file non deve superare 1MB',
        ];
    }

    public function store(){
        
        $this->validate();
        
        Product::create([
            'name'=>$this->name,
            'price'=>$this->price,
            'origin'=>$this->origin,
            'description'=>$this->description,
            'image'=>$this->image->store('image','public'),
            'user_id'=>Auth::user()->id,
        ]);
        
        $this->reset(['name','price','origin','description']);
        
        session()->flash('message','Prodotto memorizzato con successo!');
    }
    public function resetAttributes(){
        $this->name="";
        $this->price="";
        $this->origin="";
        $this->description="";
    }
    public function render()
    {
        return view('livewire.product.create-product-form');
    }
}
