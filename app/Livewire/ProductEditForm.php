<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class ProductEditForm extends Component
{
    public $name;
    public $price;
    public $origin;
    public $description;
    
    public Product $productObject;
    
    public function mount($productObject){
        $this->name=$productObject->name;
        $this->price=$productObject->price;
        $this->origin=$productObject->origin;
        $this->description=$productObject->description;
    }
    
    public function update(){
        $this->productObject->update([
            'name'=>$this->name,
            'price'=>$this->price,
            'origin'=>$this->origin,
            'description'=>$this->description,
        ]);
        
        $this->reset(['name','price','origin','description']);
        
        session()->flash('message','Prodotto modificato con successo!');
    }
    public function render()
    {
        return view('livewire.product.product-edit-form');
    }
}
