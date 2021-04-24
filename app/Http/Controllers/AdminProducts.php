<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class AdminProducts extends Controller
{
    public function products(){
        $product = Product::all();
        return view('admin.product.index')->with('product', $product);
        
    }
}
