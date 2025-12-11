<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class ProductIndex extends Component
{
    public $search="";

    public function delete($id){
        $product=Product::find($id);
        $product->delete();
    }

    public function render()
    {   
        $products = Product::query()
            ->when($this->search, function ($query) {
                $query->where('name', 'like', '%' . $this->search . '%')
                ->orWhere('description', 'like', '%' . $this->search . '%')
                ->orWhere('origin', 'like','%'. $this->search . '%');
            })
            ->orderBy('created_at', 'desc')
            ->get();
        
        return view('livewire.product.product-index', compact('products'));
    } 
}
