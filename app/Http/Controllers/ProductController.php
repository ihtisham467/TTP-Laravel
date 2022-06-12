<?php

namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        Product::create([
            'name' => 'Product 2',
            'price' => 200,
            'description' => 'This is a dummy description'
        ]);


        $products = Product::all();
        return $products;
    }
}
