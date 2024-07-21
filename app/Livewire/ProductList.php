<?php

namespace App\Livewire;

use App\Events\ApproveDelete;
use App\Models\Product;
use Livewire\Component;

class ProductList extends Component
{

    public function deleteProduct(Product $product)
    {
        // $product->delete();
        ApproveDelete::dispatch($product);
    }

    public function render()
    {
        return view('livewire.product-list',[
            'products'  => Product::all()
        ]);
    }
}
