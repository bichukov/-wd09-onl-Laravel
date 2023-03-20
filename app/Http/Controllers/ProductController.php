<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function product(Product $product)
    {
        return view('product', [
            'product' => $product
        ]);
    }

    public function products()
    {
        $products = Product::query()->where('is_active', 1)->get();
        foreach ($products as $product)
        {
            ($product->title);
        }
        return view('products',  ['products' => $products]);
    }
}
